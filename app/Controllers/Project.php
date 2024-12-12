<?php

namespace App\Controllers;

class Project extends BaseController
{
    public function index(): string
    {
        return view('home');
    }


    public function id($id = 'null'){
		$id = substr($id, 0, 4);
		$first_letter = substr($id, 0, 1);

		# ********************* Search project *********************
		# Read directory
		chdir('data');
		$projects = glob("{*}", GLOB_BRACE);
		$project_exists = False;

		# Is the id unique? If not, create a new!
		for($i = 0; $i < (count($projects)); $i++){
			if($projects[$i] == $id){
				$project_exists = True;
			}
		}

		# Project does not exist
		if(!$project_exists){
			$view = 'project_fail';
			$data = array();
			return view('404', $data);
		}
		else{

            # ********************* Loading data *********************
            # Mutations
			$data_folder = getcwd(); // este código identifica a pasta local
			$raiz = str_replace("/public/data", "",$data_folder);

			$contacts_file = fopen($data_folder.'/'.$first_letter.'/'.$id.'/'.$id.'_contacts.csv','r');
            $contacts = array();
            $total_results = 0;
            while (($line = fgets($contacts_file, 4096)) !== false) {
                array_push($contacts, $line);
                $total_results++;
            }
            fclose($contacts_file);

			$info_file = fopen($data_folder.'/'.$first_letter.'/'.$id.'/'.$id.'_info.txt','r');
			$info = array();
            while (($line = fgets($info_file, 4096)) !== false) {
                array_push($info, $line);
            }
            fclose($info_file);
            
            // Load template
            $data['contacts'] = $contacts;
			$data['info'] = $info;
            $data['id'] = $id;
            $data['total_results'] = $total_results-3;

            return view('entry', $data);
		}
	}


    private function generateRandomString($size){

		$chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
		$randomString = '';
		
		for($i = 0; $i < $size; $i = $i+1){
			$randomString .= $chars[mt_rand(0,35)];
		}

		return $randomString;

	}
    
}
