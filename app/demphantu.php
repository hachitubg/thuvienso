<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class demphantu 
{		
    function demtacgia($data){
    	$array=array();
        $array[0]['tacgia']= $data[0]->tacgia;
        $array[0]['sl']=0;
        $dem=0;
        for($i=0;$i<1;$i++){
            foreach( $data as $datas){
                if($array[$i]['tacgia']!=$datas->tacgia){
                    $dem+=1;
                    $array[$dem]['tacgia']=$datas->tacgia;
                    $array[$dem]['sl']=1;
                }
                else{
                    $array[$i]['sl']+=1;
                }
            }
         }
        $arrays=array_unique($array,0);
        $tacgia=array();
        $dem=-1;
        foreach($arrays as $ls){
             $dem+=1;
            $tacgia[$dem]['tacgia']=$ls['tacgia'];
            $tacgia[$dem]['sl']=0;
        }
        for($i=0;$i<count($tacgia);$i++){
            foreach ( $data as $sachs) {
                if($tacgia[$i]['tacgia']==$sachs->tacgia)
                {
                    $tacgia[$i]['sl']+=1;
                }
            }
       }
       return $tacgia;
    }
}
