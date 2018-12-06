<?php

namespace App\Controllers;
use App\Models\DAO\ConsultaDAO;

class HomeController extends Controller
{

    public function index()
    {
    	$dataHoje= date("'Y-m-d'");
    	$mesAtual = date("'m'");
    	$mesAnterior = date('m', strtotime('-1 months', strtotime(date('Y-m-d'))));
        $mesProximo = date('m', strtotime('+1 months', strtotime(date('Y-m-d'))));
    	$consultaDAO = new ConsultaDAO();
    	$totalDia =$consultaDAO->consultasHoje($dataHoje);
    	$totalMes = $consultaDAO->consultasMes($mesAtual);
        $totalMesAnterior = $consultaDAO->consultasMes($mesAnterior);
        $totalMesProximo = $consultaDAO->consultasMes($mesProximo);
    	self::setViewParam('totalDia',$totalDia);
    	self::setViewParam('totalMes',$totalMes);
        self::setViewParam('totalMesAnterior',$totalMesAnterior);
        self::setViewParam('totalMesProximo',$totalMesProximo);
        $this->render('home/index');
    }


}