<?php

namespace App\Http\Controllers;
use PhpOffice\PhpWord\TemplateProcessor;
use \ConvertApi\ConvertApi;
use Illuminate\Support\Facades\Response;

use Illuminate\Http\Request;

class HomeInspectionDocumentController extends Controller
{
    public function generate(Request $request)
    {
        $template_path = storage_path('app/public/templates/inspection_template.docx');

        $docx_path = storage_path("app/public/templates/generated.docx");

        $template_processor = new TemplateProcessor($template_path);

        $template_processor->setValue('address', $request->input('address'));
        $template_processor->setValue('contact_name', $request->input('contact_name'));
        $template_processor->setValue('phone_number', $request->input('phone_number'));
        $template_processor->setValue('email', $request->input('email'));
        $template_processor->setValue('estimated_age', $request->input('estimated_age'));
        $template_processor->setValue('building_type', $request->input('building_type'));
        $template_processor->setValue('state_of_occupancy', $request->input('state_of_occupancy'));
        $template_processor->setValue('inspection_date', $request->input('inspection_date'));
        $template_processor->setValue('start_time', $request->input('start_time'));
        $template_processor->setValue('end_time', $request->input('end_time'));


        $template_processor->saveAs($docx_path);


        ConvertApi::setApiSecret(env('CONVERT_API_KEY', null));
        $result = ConvertApi::convert('pdf', [
                'File' => $docx_path,
            ], 'docx'
        );

        $path = storage_path("app/public/templates/result.pdf");
        $result->saveFiles($path);

        return Response::download($path, "inspection_document.pdf")->deleteFileAfterSend(true);
    }
}
