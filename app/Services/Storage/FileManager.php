<?php


namespace App\Services\Storage;


use App\Services\BaseService;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


class FileManager extends BaseService
{
    public function upload ( UploadedFile $file, $path = 'uploads', $fileName = null )
    {
        try {
            if ( $fileName == null ) {
                $fileName = Str::random(15). time() . '.' . $file->getClientOriginalExtension();
            }

            return $file->storeAs($path, $fileName, ['disk' => 'public']);
        } catch ( \Exception $e ) {

            return false;
        }
    }

    /**
     * @param $filePath
     *
     * @return bool
     */
    public function delete ( $filePath )
    {
        $success = true;
        try {
            if ( ! @unlink( Storage::url( $filePath ) ) ) {
                $success = false;
            }
        } catch ( \Exception $e ) {
            $success = false;
        }

        return $success;
	}

}
