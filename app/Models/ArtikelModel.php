<?php 
	namespace App\Models;
	use Illuminate\Support\Facades\DB;

	class ArtikelModel{
		public static function get_all(){
			$artikel = DB::table('articles')->get();
			return $artikel;
		}

		public static function save($data){
			$newArtikel = DB::table('articles')->insert($data);
			return $newArtikel;
		}

		public static function find_by_id($id){
			$detail = DB::table('articles')->where('id',$id)->first();
			return $detail;
		}

		public static function update($id,$request){
			// dd($request);
			$update = DB::table('articles')->where('id',$id)->update(['judul'=>$request["judul"],'isi'=>$request["isi"]]);
			return $update;
		}

		public static function delete($id){
			$delete = DB::table('articles')->where('id',$id)->delete();
			return $delete;
		}


	}


?>