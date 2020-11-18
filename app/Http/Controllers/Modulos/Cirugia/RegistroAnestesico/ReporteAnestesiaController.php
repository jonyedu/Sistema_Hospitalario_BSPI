<?php


namespace App\Http\Controllers\Modulos\Cirugia\RegistroAnestesico;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use Exception;
class ReporteAnestesiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function reporteAnestesia($id)
    {
        try {
          //  $modulo = [];
            //$modulo = DB::connection('control_hospitalario_db_sql')->select("exec spConsultarListadoCirugia ".$id);
            //code...
           // dd($modulo);
       //     return  response()->json(['listaValoracion' => $modulo], 200);
          $pdf =  PDF::loadView('reports.pdf.formulario-lista-verificacion',['datosPaciente' => 1]);
       // PDF::loadHTML('reports.pdf.formulario-lista-verificacion')->setPaper('a4', 'landscape')->setWarnings(false)->save('myfile.pdf');

      return $pdf->stream('Formulario');
      
        } catch (Exception $e ) {
            //throw $th;
        }

    }
}
