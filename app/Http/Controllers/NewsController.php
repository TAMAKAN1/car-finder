<?php

namespace App\Http\Controllers;

use App\Car;
use App\newImages;
use App\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class NewsController extends Controller
{
    public function index()
    {
        return view('backend.news.news');
    }
    public function create(Request $request)
    {

        $a =  News::create([
            'subject' => $request->subject,
            'date' => $request->date,
            'content' => $request->content,
            'keyword' => $request->keyword
        ]);
        if ($request->hasFile('image')) {
            $i = 0;
            foreach ($request->file('image') as $file) {
                $extention = $file->getClientOriginalExtension();
                $filename = time() + $i . '.' . $extention;
                $path2 = "/backend/" . "/news/" . "/news/" . $filename;
                $file->move(public_path() .  "/backend/" . "/news/" . "/news/", $filename);
                newImages::create([
                    'news_id' => $a->id,
                    'image' => $path2
                ]);

                $i++;
            }
        }
        toastr()->success('مضاف');
        return redirect()->back();
    }
    public function delete(News $new)
    {
        foreach ($new->images as $image) {
            $image_path = public_path() . $image->image;
            if (file::exists($image_path)) {
                File::delete($image_path);
                //unlink($image_path);
            }
        }
        $new->delete();
        toastr()->success('تم الحذف');
        return redirect()->back();
    }
    public function image(newImages $image)
    {

        $image_path = public_path() . $image->image;
        //dd($image_path);
        if (File::exists($image_path)) {
            File::delete($image_path);
            //unlink($image_path);
        }
        $image->delete();

        return response()->json(['status' => '200']);
    }

    public function update(Request $request, News $new)
    {

        $new->update($request->all());
        $datas = $request->image;
        $insert=new newImages();

        if ($request->hasFile('image')) {
            $i = 0;
            foreach ($datas as $key => $file) {
                $extention = $file->getClientOriginalExtension();
                $filename = time() + $i . '.' . $extention;
                $path = "/backend/" . "/news/" . "/news/" . $filename;
                $file->move(public_path() .  "/backend/" . "/news/" . "/news/", $filename);
                 $insert['news_id']=$new->id;
                 $insert['image']=$path;
                $i++;
            }
            $insert->save();
        }
        toastr()->success('تحديث');
        return redirect()->back();
    }
}
