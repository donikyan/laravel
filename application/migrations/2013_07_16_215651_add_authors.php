
<?php

class Add_Authors {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::table("authors")->insert(array(
			"username"=>"Ani Donikyan",
			"bio"=>"Ani Donikyan is a really great authors",
			"created_at"=>date("Y-m-d H:m:s"),
			"updated_at"=>date("Y-m-d H:m:s")
			));
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		DB::table("authors")->where("username", "=","Ani Donikyan")->delete();
		
	}

}