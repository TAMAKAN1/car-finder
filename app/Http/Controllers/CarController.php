<?php

namespace App\Http\Controllers;

use App\Car;
use App\CarImage;
use App\Engine;
use App\InsideImage;
use App\Outside;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CarController extends Controller
{
    public function store(Request $request)
    {


        $a =  Car::create([
            'category_id' => $request->category_id,
            'car_name' => $request->car_name,
            'modal' => $request->modal,
            'size' => $request->size,
            'price' => $request->price,
            'capacity' => $request->capacity,
            'seats' => $request->seats,
            'fuel_card' => $request->fuel_card,
            'description' => $request->description,
            'dimention'=>$request->dimention
        ]);



        if ($request->hasFile('in')) {
            $i = 0;
            foreach ($request->file('in') as $file) {
                $extention = $file->getClientOriginalExtension();
                $filename = time() + $i . '.' . $extention;
                $path1 = "/backend/" . "/Car/" . "/Inside/" . $filename;
                $file->move(public_path() .  "/backend/" . "/Car/" . "/Inside/", $filename);
               
                   InsideImage::create([
                    'car_id'=>$a->id,
                    'in'=>$path1
                   ]);

                $i++;
            }
          
        }

        if ($request->hasFile('out')) {
            $i = 0;
            foreach ($request->file('out') as $file) {
                $extention = $file->getClientOriginalExtension();
                $filename = time() + $i . '.' . $extention;
                $path2 = "/backend/" . "/Car/" . "/outside/" . $filename;
                $file->move(public_path() .  "/backend/" . "/Car/" . "/outside/", $filename);
                Outside::create([
                    'car_id'=>$a->id,
                    'out'=>$path2
                   ]);
                 
                $i++;
            }
          
        }
        if ($request->hasFile('engine')) {
            $i = 0;
            foreach ($request->file('engine') as $file) {
                $extention = $file->getClientOriginalExtension();
                $filename = time() + $i . '.' . $extention;
                $path3 = "/backend/" . "/Car/" . "/Engine/" . $filename;
                $file->move(public_path() .  "/backend/" . "/Car/" . "/Engine/", $filename);
                Engine::create([
                    'car_id'=>$a->id,
                    'enngine'=>$path3
                   ]);
                 
                $i++;
            }
          
        }


        toastr()->success('مضاف');
        return redirect()->back();
    }

    public function Update(Request $request, Car $car)
    {


        $car->update([
            'category_id' => $request->category_id,
            'car_name' => $request->car_name,
            'modal' => $request->modal,
            'size' => $request->size,
            'price' => $request->price,
            'capacity' => $request->capacity,
            'seats' => $request->seats,
            'fuel_card' => $request->fuel_card,
            'description' => $request->description,
            'dimention'=>$request->dimention
        ]);



        if ($request->hasFile('in')) {
            $i = 0;
            foreach ($request->file('in') as $file) {
                $extention = $file->getClientOriginalExtension();
                $filename = time() + $i . '.' . $extention;
                $path1 = "/backend/" . "/Car/" . "/Inside/" . $filename;
                $file->move(public_path() .  "/backend/" . "/Car/" . "/Inside/", $filename);
               
                   InsideImage::create([
                    'car_id'=>$car->id,
                    'in'=>$path1
                   ]);

                $i++;
            }
          
        }

        if ($request->hasFile('out')) {
            $i = 0;
            foreach ($request->file('out') as $file) {
                $extention = $file->getClientOriginalExtension();
                $filename = time() + $i . '.' . $extention;
                $path2 = "/backend/" . "/Car/" . "/outside/" . $filename;
                $file->move(public_path() .  "/backend/" . "/Car/" . "/outside/", $filename);
                Outside::create([
                    'car_id'=>$car->id,
                    'out'=>$path2
                   ]);
                 
                $i++;
            }
          
        }
        if ($request->hasFile('engine')) {
            $i = 0;
            foreach ($request->file('engine') as $file) {
                $extention = $file->getClientOriginalExtension();
                $filename = time() + $i . '.' . $extention;
                $path3 = "/backend/" . "/Car/" . "/Engine/" . $filename;
                $file->move(public_path() .  "/backend/" . "/Car/" . "/Engine/", $filename);
                Engine::create([
                    'car_id'=>$car->id,
                    'enngine'=>$path3
                   ]);
                 
                $i++;
            }
          
        }


        toastr()->success('محدث');
        return redirect()->back();
    }

public function insideDelete(InsideImage $image){
 
    $image_path = public_path() . $image->in;
    //dd($image_path);
    if (File::exists($image_path)) {
        File::delete($image_path);
        //unlink($image_path);

 }
 $image->delete();

 return response()->json(['status'=>'200']);

} 
public function outdelete(Outside $image){
 
    $image_path = public_path() . $image->out;
    //dd($image_path);
    if (File::exists($image_path)) {
        File::delete($image_path);
        //unlink($image_path);

 }
 $image->delete();
 return response()->json(['status'=>'200']);


} 
public function engine(Engine $image){
 
    $image_path = public_path() . $image->enngine;
    //dd($image_path);
    if (File::exists($image_path)) {
        File::delete($image_path);
        //unlink($image_path);
 }
 $image->delete();
    
 return response()->json(['status'=>'200']);
} 

public function delete(Car $car){
foreach($car->outImages as $image){
    $image_path = public_path() . $image->out;
    if (File::exists($image_path)) {
        File::delete($image_path);
        //unlink($image_path);
 }
}

foreach($car->insideImages as $image){
    $image_path = public_path() . $image->in;
    if (File::exists($image_path)) {
        File::delete($image_path);
        //unlink($image_path);

 }
}

foreach($car->engineImages as $image){
    $image_path = public_path() . $image->enngine;
    if (File::exists($image_path)) {
        File::delete($image_path);
        //unlink($image_path);
        
 }
}
$car->delete();
    
toastr()->success('تم الحذف');
return redirect()->back();
}



}
