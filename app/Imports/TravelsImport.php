<?php

namespace App\Imports;

use App\Models\viajes;
use Illuminate\Support\Colecction;
use Maatwebsite\Excel\Concerns\ToModel;

class TravelsImport implements ToModel
{

    protected $validRows = [];
    protected $invalidRows = [];
    protected $duplicatedRows = [];
    protected $existingOriginsDestinations = [];

    public function collection(Collection $rows){

        foreach($rows as $row){
            $origin = $row['origen'];
            $destination = $row['destino'];

            if($this->hasDuplicateOriginDestination($origin,$destination)){
                $this->duplicatedRows[] = $row;
            }else{
                //Limpiar el campo de tarifa base




                if(isset($row['origen']) && isset($row['destino']) && isset($row['cantidad_de_asientos']) && isset($row['tarifa_base']) && is_numeric($row['cantidad_de_asientos']) && is_numeric($row['tarifa_base'])){

                    $this->validRows[] = $row;

                    $this->existingOriginsDestinations[] = $origin . '_' . $destination;


                }else{

                    $this->invalidRows[] = $row;
                }
            }
        }

    }

    private function hasDuplicateOriginDestination($origin,$destination){

        $key = $origin . '_' . $destination;

        return in_array($key,$this->existingOriginsDestinations);

    }


    public function getValidRows(){
        return $this->validRows;
    }

    public function getInvalidRows(){
        return $this->invalidRows;
    }

    public function getDuplicatedRows(){
        return $this->duplicatedRows;
    }



    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new viajes([
            //
        ]);
    }
}
