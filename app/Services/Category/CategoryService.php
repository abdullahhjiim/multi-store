<?php


namespace App\Services\Category;


use App\Enums\VisibilityStatus;
use App\Models\Category;
use App\Services\BaseService;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategoryService extends BaseService
{
    public function all(array $filters = [])
    {
        $query = Category::query();

        if (!empty($filters['status'])) {
            $query->where('status', $filters['status']);
        }

        if (!empty($filters['q'])) {
            $query->where(DB::raw('LOWER(name)'), 'LIKE', '%'. strtolower($filters['q']) .'%');
        }

        if (!empty($filters['category_global_search'])) {
            $query->where(function ($q) use ($filters) {
                $q->orWhere(DB::raw('LOWER(name)'), 'LIKE', '%' . strtolower($filters['category_global_search']) . '%');
            });
        }


        $limit = Arr::get($filters, 'limit', 20);

        return $limit != '-1' ? $query->paginate($limit) : $query->get();
    }

    public function getById($id)
    {
        return Category::find($id);
    }

    public function store(array $data)
    {
        return $this->saveCategory($data);
    }

    public function update($id, array $data)
    {
        return $this->saveCategory($data, $id);
    }

    public function destroy($id)
    {
        return Category::find($id)->delete();
    }

    private function saveCategory($data, $id = null)
    {
        $category = Category::findOrNew($id);
        $category->fill($data);
        $category->slug = Str::slug($data['name']);
        $category->status = Arr::get($data, 'status', VisibilityStatus::INACTIVE);
        $category->save();

        return $category;
    }
}
