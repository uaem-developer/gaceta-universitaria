<?php
namespace Gaceta\Components;

class ImageResizer{

    public function processImage($fileImage)
    {
        $maxWidthImage = 1000;
        $mediumWidthImage = 500;

        $filename = substr($fileImage->getClientOriginalName(), 0, -3);
        $path = \Str::slug($filename."-".uniqid()).'.jpg';

        $watermark = \Image::make(app_path().'/views/uaem-watermark.png');
        $image = \Image::make($fileImage);

        $image->widen($maxWidthImage, function ($constraint) {
            $constraint->upsize();
          })->insert($watermark, 'top-left')
            ->insert($watermark, 'bottom-right')
            ->encode('jpg', 90)
            ->save('uploads/posts/'.$path);

        $image->widen($mediumWidthImage, function ($constraint) {
            $constraint->upsize();
        })->encode('jpg', 90)->save('uploads/posts/medium/'.$path);

        return $path;
    }
}