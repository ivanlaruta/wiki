<?php

namespace App\Http\Controllers;
use App\Ripcord\ripcord; 
use Illuminate\Http\Request;

class OdooController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // $url = 'http://35.184.166.207:8069';
       $url = 'https://35.193.0.10';
        $db = 'TOYO-INTEGRACION';
        $username = 'laura.sainz@toyosa.com';
        $password = 'toyosa';
      
         $info = ripcord::client('https://demo.odoo.com/start')->start();
         list($url, $db, $username, $password) = array($info['host'], $info['database'], $info['user'], $info['password']);

        $common = ripcord::client("$url/xmlrpc/2/common");
        

        $uid = $common->authenticate($db, $username, $password, array());

        $models = ripcord::client("$url/xmlrpc/2/object");
        $test = $models->execute_kw($db, $uid, $password,
            'res.partner', 'check_access_rights',
            array('read'), array('raise_exception' => false));

        $stock_chasis = $models->execute_kw($db, $uid, $password, 'stock.picking', 'LeerChasis', array(array()), array());
        
        dd($common->version());
        dd($stock_chasis);
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
}
