<?

class MY_Model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();

        $class = get_called_class();
        if ($class.'.php' != basename(__FILE__)){
            $split = explode('_', $class);
            $json_file = APPPATH.'database/'.strtolower($split[0].'.json');
            $data = is_file($json_file)? json_decode(file_get_contents($json_file), true) : array();

            foreach (get_object_vars($this) as $prop => $value){
                $this->{$prop} = $data[$prop];
            }
        }
    }
}
