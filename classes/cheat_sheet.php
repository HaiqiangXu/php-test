<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN""http://www.w3.org/TR/html4/loose.dtd">

<html>
    <head>
        <title>Example</title>
    </head>
    <body>    
    <?php
		//definicion de clases
		interface iTemplate
		{
			public function Write();
        }
        
        interface iTemplate2
		{
			public function Write2();
		}

		abstract class aFoo
		{
			protected $grp;
			
			abstract public function getGrp();
		}
		
		class foo extends aFoo implements iTemplate, iTemplate2	//supports abstraction and multiheritage
		{
			const FOO = "F";		//constant
			var $foo = self::FOO;	//From PHP5, var is equivalent to 'public'. It was for variable declaration for version <= PHP4
			public static $rul = "rul";     //as static, doesn't lose its value outside the context. In my opinion as good practice, always try avoid static values.
			private $bar = array();
			
			function __construct()
			{
                //To access static functions/vars use scope (::). For instance functions/vars, use member '->' through instance ($this)
				$this->foo = '';
			}
			
			function __get($name = '')      //data accessor
			{
				return $this->bar[$name];
			}
		
			function __set($name, $value)
			{
				$this->bar[$name] = $value;
			}
			
			function getGrp()
			{
				return $this->grp;
			}
			
			function DoFoo()
			{
				$this->DoFoo2('Foo');
			}
			
			function Write()
			{
				echo "foo escribiendo a traves de funcion interfaz iTemplate <br/>";
            }
                
            function Write2()
			{
				echo "foo escribiendo a traves de funcion interfaz iTemplate2 <br/>";
			}
			
			function iterateVisible()
			{
				echo "MyClass::iterateVisible:\n";
				foreach($this as $key => $value)
				{
					print "$key => $value\n";//es posible iterar por el valor de todas las varibles de la clase
				}
			}
			
			private function DoFoo2($str)	//NOTA: no se permiten sobrecargas de funciones
			{
				$this->foo = $str;
				$this->bar = array('Bar1', 'Bar2', 'Bar3');
			}
		}
		
		class goo extends foo
		{
			function Write()
			{
				echo "Goo escribiendo en funcion sobrecargada<br/>";
				parent::Write();			//optional, obviously
            }
            
            private function DoFoo2($str)
            {
                $this->bar = array('GooBar1', 'GooBar2', 'GooBar3');
            }
		}

		//acceso a nivel de instancia
		$m_foo = new foo;
        $m_foo->DoFoo();
		echo $m_foo::FOO . "<br/>";     //las constantes se deben acceder con scope '::' ya que son publicas estaticas
		echo $m_foo->foo . "<br/>";
		echo $m_foo->a = '1' . "<br/>";	//llamada a las 'properties' get y set para asignar y recuperar datos privados
		var_export($m_foo instanceof foo) . "<br/>";
		echo "<br/>";
		echo "\$m_foo es de tipo: ".get_class($m_foo)."<hr/>";
		
		//acceso a nivel de clase/estatico
		echo foo::$rul . "<br/>";
		echo foo::FOO . "<br/>";
		foo::Write();           //don't use in PHP7! Deplecated way of access non-static function in static way
        echo "<hr/>";

        //nueva instancia de una clase derivada
		$m_goo = new goo();
		$m_goo->Write();		//funcion sobrecargada
		$m_goo->DoFoo();		//funcion heredada
		echo $m_goo->foo . "<br/>";		//variable heredada

		$m_foo = NULL;
		echo 'm_foo tiene valor NULL: ';
		echo var_export((bool)is_null($m_foo)) . "<br/>";
        ?>
        
        <form action="action.php" method="post">
			<p>Your name: <input type="text" name="name" /></p>
			<p>Your age: <input type="text" name="age" /></p>
			<p><input type="submit" /></p>
        </form>
    </body>
</html>