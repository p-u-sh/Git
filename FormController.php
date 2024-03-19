<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Facade\FlareClient\View;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function members()
    {
        return View('index');
    }

    function apply()
    {
        return view('apply.index');
    }

    public function save_app(Request $request)
    {
        $app = new Application();
        $app->app_name = time();

        $app->save();

        $directory = public_path('uploads/' . $app->id);
        if (!file_exists($directory)) {
            mkdir($directory, 0777, true);
        }
        $fileName = $app->id . '_application_form_' . $request->application_form->getClientOriginalName();
        $filePath = $directory . '/' . $fileName;
        $request->application_form->move($directory, $fileName);

        $fileName2 = $app->id . '_stop_order_' . $request->stop_order->getClientOriginalName();
        $filePath2 = $directory . '/' . $fileName2;
        $request->stop_order->move($directory, $fileName2);

        $fileName3 = $app->id . '_id_card_' . $request->id_card->getClientOriginalName();
        $filePath3 = $directory . '/' . $fileName3;
        $request->id_card->move($directory, $fileName3);



        $fileName4 = $app->id . '_payslip_' . $request->payslip->getClientOriginalName();
        $filePath4 = $directory . '/' . $fileName4;
        $request->payslip->move($directory, $fileName4);


        $app_update = Application::where('id', $app->id)
            ->update([
                'membership_form' => $fileName,
                'stop_order' => $fileName2,
                'id_card' => $fileName3,
            ]);
    }



    // if ($app->save()) {
    //     return back()->with("success", 'submited');
    // }
}
