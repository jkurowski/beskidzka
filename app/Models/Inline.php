<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;
use Intervention\Image\ImageManagerStatic as ImageManager;

class Inline extends Model
{
    const UPDATED_AT = null;
    const CREATED_AT = null;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_place',
        'modaltytul',
        'modaleditor',
        'modaleditortext',
        'modallink',
        'modallinkbutton',
        'file',
        'file_alt',
        'file_width',
        'file_height',
        'sort '
    ];

    public static function getElements($id){
        return static::where('id_place', $id)->get();
    }

    public function upload($name, $uploadfile, $width, $height)
    {

        $oldFile = self::where('id', $this->id)->pluck('file')->first();

        if($oldFile) {
            $img = public_path('uploads/inline/' . $oldFile);

            //dd($img);

            if (file_exists($img)) {
                unlink($img);
            }
        }

        $name_file = Str::slug($name) . '_' . Str::random(3) . '.' .$uploadfile->getClientOriginalExtension();
        $uploadfile->storeAs('inline', $name_file, 'public_uploads');

        $name_webp = date('His') . '_' . Str::slug($name_file) . '.webp';

        $filepath = public_path('uploads/inline/' . $name_file);
        $filepath_webp = public_path('uploads/inline/' . $name_webp);


        //Image::make($filepath)->fit($width, $height)->save($filepath);
        ImageManager::make($filepath)->encode('webp', 90)->save($filepath_webp);

        $this->update(['file' => $name_webp ]);

        return $name_webp;
    }
}
