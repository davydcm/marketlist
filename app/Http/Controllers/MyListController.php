<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use function PHPUnit\Framework\fileExists;

class MyListController extends Controller
{
    public function index() {

        $count = 0;
        $file = public_path().'\listas\list.txt';
        $itens = [];
        $handle = fopen($file,"r");
        if ($handle) {
            while (!feof($handle)) {
                $count = $count+1;
                $arr = explode("|",fgets($handle));
                $arr['linha'] = $count;
                if ($arr[0] != "\r\n") {
                    array_push($itens,$arr);
                }
            }
        }
        fclose($handle);
        return view('lista.mylist',compact('itens'));
    }

    public function add(Request $r) {
        $file = public_path().'\listas\list.txt';
        $handle = fopen($file,"r");
        $itens = [];
        if ($handle) {
            while (!feof($handle)) {
                array_push($itens,fgets($handle));
            }
        }
        fclose($handle);
        array_push($itens,"\n".$r->produto .'|'. $r->qtd);
        
        
        $handle = fopen($file,"w");
        foreach($itens as $linha) {
            fwrite($handle,$linha);
        } 
        fclose($handle);        
        
        return redirect()->route('mylist');
    }

    public function remove($linha) {
        $file = public_path().'\listas\list.txt';
        $handle = fopen($file,"r");
        $itens = [];
        $i = 0;
        if ($handle) {
            while (!feof($handle)) {
                array_push($itens,fgets($handle));    
            }
            unset($itens[$linha-1]);
        }
        fclose($handle);     
        $handle = fopen($file,"w");
        foreach($itens as $linha) {
            fwrite($handle,$linha);
        } 
        fclose($handle);        
        
        return redirect()->route('mylist');
    }
}
