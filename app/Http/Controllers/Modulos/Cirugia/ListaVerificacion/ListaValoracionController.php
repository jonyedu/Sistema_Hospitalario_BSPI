<?php

namespace App\Http\Controllers\Modulos\Cirugia\ListaVerificacion;

use App\Http\Controllers\Controller;
use App\Models\Modulos\Cirugia\ListaValoracion\tb_listado_verificacion;
use Illuminate\Http\Request;
use App\Models\Modulos\Imagenes\FirmasPorAtencion;

use Illuminate\Support\Facades\DB;
use App;
use Exception;
use FFI\Exception as FFIException;
use PhpParser\Builder\Function_;
use PhpParser\Node\Expr\FuncCall;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Arr;

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
            // $objeto = $request->input('objeto1');
            //return  response()->json(['msj' => $request->input()], 200);

            $listaValoracion = tb_listado_verificacion::updateOrCreate(
                ['SecCirPro' => $request->input('SecCirPro')],
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
            //return true;
            //  echo "el id ".$listaValoracion->id;
            // return response()->json(['listaValoracion' => $listaValoracion], 200);
            //          $request ->validate([

            //         'observacion'=>'required']
            //     );

            //   $listaValoracion = new tb_listado_verificacion;
            //   $listaValoracion->SecCirPro = $request->SecCirPro;
            //   $listaValoracion->chkentrada01 = $request->chkentrada01;
            //   $listaValoracion->chkentrada02 = $request->chkentrada02;
            //   $listaValoracion->chkentrada03 = $request->chkentrada03;
            //   $listaValoracion->chkentrada04 = $request->chkentrada04;
            //   $listaValoracion->chkentrada05 = $request->chkentrada05;
            //   $listaValoracion->chkentrada06 = $request->chkentrada06;
            //   $listaValoracion->chkentrada07 = $request->chkentrada07;
            //   $listaValoracion->chkquirurgica01 = $request->chkquirurgica01;
            //   $listaValoracion->chkquirurgica02 = $request->chkquirurgica02;
            //   $listaValoracion->chkquirurgica03 = $request->chkquirurgica03;
            //   $listaValoracion->chkquirurgica04 = $request->chkquirurgica04;
            //   $listaValoracion->chkquirurgica05 = $request->chkquirurgica05;
            //   $listaValoracion->chkquirurgica06 = $request->chkquirurgica06;
            //   $listaValoracion->chkquirurgica07 = $request->chkquirurgica07;
            //   $listaValoracion->chksalida01 = $request->chksalida01;
            //   $listaValoracion->chksalida02 = $request->chksalida02;
            //   $listaValoracion->chksalida03 = $request->chksalida03;
            //   $listaValoracion->chksalida04 = $request->chksalida04;
            //   $listaValoracion->chksalida05 = $request->chksalida05;
            //   $listaValoracion->user_id = auth()->id();
            //   $listaValoracion->cargo = 1;
            //   $listaValoracion->observacion = $request->observacion;
            //   $listaValoracion->firma = 1;

            //   $listaValoracion->save();
            //   return response()->json(
            //     ['id' => $listaValoracion->id],
            //     200
            // );

            //  return back()->with('mensaje','nota agregada',['id' => $listaValoracion->id]);
            return response()->json(['id' => 1, 'Guardado Correctamente'], 200);
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
            $listaValoracion = tb_listado_verificacion::where('SecCirPro', $id)
                ->get();
            $Count = count($listaValoracion);
            // tbValoracion__::findOrFail($id);
            //dd($listaValoracion);
            if ($listaValoracion) {
                # code...
                return  response()->json([
                    'listaValoracion' => $listaValoracion,
                    'contador' => $Count
                ], 200);
            } else {
            }
            return response()->json(['listaValoracion' => $Count], 200);
        } catch (Exception $e) {
            //throw $th;
            //return response()->json(['listaValoracion' => 0], 500);
        }
    }
    public function mostrar($id)
    {
        try {
            //echo "entra";
            //  $modulo = [];
           // $modulo = DB::connection('control_hospitalario_db_sql')->select("exec spConsultarListadoCirugia " . $id);
            //modulo de firmas

            $modulo = tb_listado_verificacion::where('SecCirPro',$id)
            ->with('GetBuscarCirugias')
            ->first();
            // $firma = FirmasPorAtencion::where('id_atencion', 40)
            //     ->where('id_tipo_documento', 13)
            //     ->first();




            //  $admin = Arr::only($modulo,);
            //code...
            // dd($modulo);
            //return  response()->json(['datosPaciente' => $modulo], 200);


           /*  $pdf =  PDF::loadView('reports.pdf.formulario-lista-verificacion', [
                'datosPaciente' => $modulo])->setPaper('a4', 'landscape');
            return $pdf->stream('Formulario'); */

            $pdf = PDF::loadView('reports.pdf.formulario-lista-verificacion', [
                'datosPaciente' => $modulo
            ]);
            return $pdf->stream("Formulario");
            //  return  response()->json(['datosPaciente' => $modulo], 200);


        } catch (Exception $e) {
            return response()->json(['mensaje' => $e->getMessage()], 500);
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
