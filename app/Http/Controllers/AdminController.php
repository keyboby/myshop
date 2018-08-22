<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Models\CarBrand;
use App\Models\CarColor;
use App\Http\Requests\CarBrandRequest;
use App\Http\Requests\CarColorRequest;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        return view('admin.index');
    }
    //注册用户
    public function registered_member(User $user) {
        $users = $user->paginate(5);
        return view('admin.registered',compact('users'));
    }
    //车辆品牌
    public function car_brand(CarBrand $carBrand,Request $request) {
        $carBrands = $carBrand->withOrder($request->order)->paginate(5);
        return view('admin.carBrand',compact('carBrands'));
    }
    //车辆品牌的保存或修改
    public function car_brand_edit(CarBrand $carBrand,Request $request){
        $data = $request->all();

        if (!$data['brand_name']) {
            unset($data['brand_name']);
        } else {
            //判断是否有重复的
            $checkRest = $this->checkArr(['brand_name'=>trim($data['brand_name'])]);
            if ($checkRest) {
                return redirect()->route('admin.car_brand')->with('message', '已存在同样的名称!');
            }
        }

        $id = $data['car_brand_id'];
        unset($data['car_brand_id']);
        $carBrand->where('id',$id)->update($data);
        return redirect()->route('admin.car_brand')->with('message', '操作成功!');
    }

    //新增
    public function car_brand_save(CarBrand $carBrand,CarBrandRequest $request){
        $data = $request->all();
        $newData = [];
        $newData['brand_name'] = isset($data['car_brand_name_add'])?trim($data['car_brand_name_add']):'';
        //判断是否有重复的
        $checkRest = $this->checkArr($newData);
        if ($checkRest) {
            return redirect()->route('admin.car_brand')->with('message', '已存在同样的名称!');
        }
        $newData['status'] = isset($data['car_brand_status_add'])&&($data['car_brand_status_add']>=0)?trim($data['car_brand_status_add']):1;
        $newData['sort'] = 255;
        $carBrand->fill($newData);

        $carBrand->save();
        return redirect()->route('admin.car_brand')->with('message', '创建成功!');
    }

    public function checkArr($arr = [],$type = 'car_brand') {
        switch ($type) {
            case 'car_brand':
                return CarBrand::where($arr)->get()->toArray();
                break;
            case 'car_color':
                return CarColor::where($arr)->get()->toArray();
                break;
            default:
                # code...
                break;
        }

    }

    //车辆颜色管理
    public function car_color(CarColor $carColor,Request $request) {
        $carColors = $carColor->recent($request->order)->paginate(5);
        return view('admin.carColor',compact('carColors'));
    }
    //车辆品牌的保存或修改
    public function car_color_edit(CarColor $carColor,Request $request){
        $data = $request->all();

        if (!$data['car_color_name']) {
            unset($data['car_color_name']);
        } else {
            //判断是否有重复的
            $checkRest = $this->checkArr(['car_color_name'=>trim($data['car_color_name'])],'car_color');
            if ($checkRest) {
                return redirect()->route('admin.car_brand')->with('message', '已存在同样的名称!');
            }
        }

        $id = $data['car_color_id'];
        unset($data['car_color_id']);
        $carColor->where('id',$id)->update($data);
        return redirect()->route('admin.car_color')->with('message', '操作成功!');
    }

    //新增
    public function car_color_save(CarColor $carColor,CarColorRequest $request){
        $data = $request->all();
        $newData = [];
        $newData['car_color_name'] = isset($data['car_color_name_add'])?trim($data['car_color_name_add']):'';
        //判断是否有重复的
        $checkRest = $this->checkArr($newData,'car_color');
        if ($checkRest) {
            return redirect()->route('admin.car_color')->with('message', '已存在同样的名称!');
        }
        $newData['status'] = isset($data['car_color_status_add'])&&($data['car_color_status_add']>=0)?trim($data['car_color_status_add']):1;
        $newData['sort'] = 255;
        $carColor->fill($newData);

        $carColor->save();
        return redirect()->route('admin.car_color')->with('message', '创建成功!');
    }
}
