<?php
//************************
//　設定用の定数ファイル ディレクトリ・ファイルのパス、その他の必要定数などはここで設定
//************************

//ディレクトリの最後には/をつけること

//***************************
//phpのエラー設定
//***************************
ini_set( "display_errors" , 1 ); error_reporting(E_ALL); // エラーを表示する
//ini_set( "display_errors" , 0 ); //エラーを表示しない

//***************************
//Rootディレクトリ関連
//***************************
//baseとなるトップディレクトリ
define( "_BASE_DIRECTORY" , "/" );
//アプリケーションのroot
define( "_ROOT_DIR" , "/Users/hayashimizuki/www/drone_system/" );
//設定ファイル格納用のディレクトリ
define( "_CONFIG_DIR" , _ROOT_DIR."config/" );
//コントローラのディレクトリ
define( "_CONTROLLER_DIR" , _ROOT_DIR."controller/" );
//htdocsディレクトリ
define( "_HTDOCS_DIR" , _ROOT_DIR."htdocs/" );
//assetsディレクトリ
define( "_ASSETS_DIR" , _HTDOCS_DIR."assets/" );
//smarty関連格納用ディレクトリ
define( "_SMARTY_DIR" , _ROOT_DIR."smarty/" );

//************************************
//smarty関係のライブラリ、ディレクトリパス
//************************************
//smartyのソースコード格納ライブラリ
define( "_SMARTY_LIBS_DIR" , _SMARTY_DIR."libs/" );
//smarty使用時の必須ファイル
define( "_SMARTY_FILE" , _SMARTY_LIBS_DIR."Smarty.class.php" );
//.tpl格納用のテンプレートディレクトリ
define( "_TEMPLATES_DIR" , _SMARTY_DIR."templates/" );
//コンパイルしたファイル格納用のディレクトリ
define( "_TEMPLATES_C_DIR" , _SMARTY_DIR."templates_c/" );
//smartyの設定ファイル格納用のディレクトリ
define( "_SMARTY_CONFIGS_DIR" , _SMARTY_DIR."configs/" );
//smartyのキャッシュ格納用のディレクトリ
define( "_CACHE_DIR" , _SMARTY_DIR."templates/" );

//************************************
//システム名  セッションなどで使用
//************************************
define( "_SERVICE_NAME" , "card_system" );

//************************************
//ローカルデータベース用の変数
//************************************
define( "_DB_HOST" , "127.0.0.1" );
define( "_DB_USER" , "root" );
define( "_DB_PASS" , "doyadoya4141" );
define( "_DB_NAME" , "sampledb" );

//************************************
//外部データベース用の変数
//************************************
define( "_OUT_DB_HOST" , "10.0.1.51" );
define( "_OUT_DB_USER" , "design" );
define( "_OUT_DB_PASS" , "ds_master" );
define( "_OUT_DB_NAME" , "design_studio" );

//外部DBを使用するか、 するならtrue
define( "_OUT_DB_FLAG", false);

//dbタイプ mysql sqlite ...
define( "_DB_TYPE", "mysql");

?>
