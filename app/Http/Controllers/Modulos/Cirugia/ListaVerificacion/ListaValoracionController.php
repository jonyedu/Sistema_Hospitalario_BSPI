<?php

namespace App\Http\Controllers\Modulos\Cirugia\ListaVerificacion;
use App\Http\Controllers\Controller;
use App\Models\Modulos\Cirugia\ListaValoracion\tb_listado_verificacion;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App;
use Exception;
use FFI\Exception as FFIException;
use PhpParser\Builder\Function_;
use PhpParser\Node\Expr\FuncCall;
use Barryvdh\DomPDF\Facade as PDF;

class ListaValoracionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        try {
            $listaValoracion = tb_listado_verificacion::updateOrCreate(
                ['SecCirPro' => $request->input('frm_idCirugiaProgramada')],
                [ 
                    'chkentrada01' => $request->input('chkentrada01'),
                    'chkentrada02' => $request->input('chkentrada02'), 
                    'chkentrada03' => $request->input('chkentrada03'), 
                    'chkentrada04' => $request->input('chkentrada04'), 
                    'chkentrada05' => $request->input('chkentrada05'), 
                    'chkentrada06' => $request->input('chkentrada06'), 
                    'chkentrada07' => $request->input('chkentrada07'), 
                    'chkquirurgica01' => $request->input('chkquirurgica01'), 
                    'chkquirurgica02' => $request->input('chkquirurgica02'), 
                    'chkquirurgica03' => $request->input('chkquirurgica03'), 
                    'chkquirurgica04' => $request->input('chkquirurgica04'), 
                    'chkquirurgica05' => $request->input('chkquirurgica05'), 
                    'chkquirurgica06' => $request->input('chkquirurgica06'), 
                    'chkquirurgica07' => $request->input('chkquirurgica07'), 
                    'chksalida01' => $request->input('chksalida01'), 
                    'chksalida02' => $request->input('chksalida02'), 
                    'chksalida03' => $request->input('chksalida03'), 
                    'chksalida04' => $request->input('chksalida04'), 
                    'chksalida05' => $request->input('chksalida05'), 
                    'user_id' => auth()->id(), 
                    'cargo' => 1, 
                    'observacion' => $request->input('observacion'), 
                    'firma' => 1
                ]
            );
            return response()->json(['msg' => 'OK'], 200);
        } catch (Exception $e) {
            return response()->json(['mensaje' => $e->getMessage()], 500);
        }
    
      
      
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
        try {
            //code...
            $listaValoracion = tb_listado_verificacion::findOrFail($id) ;
            // tbValoracion__::findOrFail($id);
            //dd($listaValoracion);
            if ($listaValoracion) {
                # code...
                return  response()->json(['listaValoracion' => $listaValoracion], 200);
            }else{

            }   return response()->json(['listaValoracion']);
          
        } catch (Exception $e) {
            //throw $th;
            //return response()->json(['listaValoracion' => 0], 500);
        }

     
    }
    public function mostrarr($id)
    {
        try {
          //  $modulo = [];
            $modulo = DB::connection('control_hospitalario_db_sql')->select("exec spConsultarListadoCirugia ".$id);
            //code...
           // dd($modulo);
       //     return  response()->json(['listaValoracion' => $modulo], 200);
          $pdf =  PDF::loadView('reports.pdf.formulario-lista-verificacion',['datosPaciente' => $modulo])->setPaper('a4', 'landscape');
       // PDF::loadHTML('reports.pdf.formulario-lista-verificacion')->setPaper('a4', 'landscape')->setWarnings(false)->save('myfile.pdf');

      return $pdf->stream('Formulario');
      
        } catch (Exception $e ) {
            //throw $th;
        }

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
}
