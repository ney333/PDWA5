<?php
/*Desenvolvida por Juliano Sales*/
class class_cadastroCliente
		{
			private $comandoSQL;
			private $bd;
			private $txtNome;
			private $txtCpf;
			private $txtRg;
			private $txtEndereco;
			private $txtNumero;
			private $txtBairro;
			private $txtCidade;
			private $txtUf;
			private $txtCep;
			private $txtNomeFantasia;
			private $txtData;
			private $txtStatus;
			private $txtTelefone;
			private $txtFax;
			private $txtCelular;
			private $txtComercial;
			private $txtEmail;
			private $txtSenha;
			private $txtWeb;
			private $txtAvatar;
            private $dadosBanco;
            private $conexao;
            private $selecionaBanco;
            private $consulta;
            private $consultacid;
            private $resultado;
			private $txtSexo;
			private $txtComple;

            function _construct()
			{
			}

			//Dados nao nulos
		 public function setNome ($valor)
					 {
					  $this->txtNome = $valor;
					 }
		 public	function getNome()
					 {
						return($this->txtNome);
					 }

		 public	function setCpf($valor)
					 {
					   $this->txtCpf = $valor;

					 }
		 public	function getCpf()
					 {
						return ($this->txtCpg);
					 }
		 public	 function setRg($valor)
					 {
					   $this->txtRg = $valor;

					 }
		 public	function getRg()
					{
						return($this->txtRg);
					}

		 public	function setEndereco($valor)
			         {
		 $this->txtEndereco = $valor;

					 }

		 public	function getEndereco()
					{
						return($this->txtRg);
					}

		 public	function setBairro($valor)
					 {
					  $this->txtBairro= $valor;

					 }
		 public	function getBairro()
					{
						return($this->txtBairro);
					}
		 public	function setCidade($valor)
					 {
					  $this->txtCidade = $valor;

					 }
		 public	function getCidade()
					{

						return($this->txtCidade);
					}

		 public	function setUf($valor)
					 {
					  $this->txtUf=$valor;

					 }
		public function getUf()
					{

						return($this->txtUf);
					}

		  public  function setCep($valor)
					 {
					  $this->txtCep = $valor;

					 }
		public function getCep()
					{

					 return($this->txtCep);

					}
		//Dados Adcionais

		 public	function setNomeFantasia($valor)
					 {
					   $this->txtNomeFantasia=$valor;

					 }
		 public function getNomeFantasia()
					{
						return($this->txtNomeFantasia);
					}
		 public	function setData($valor)
					 {
					   $this->txtData=$valor;

					 }
		public function getsetData()
					{
						return($this->txtData);
					}

		public function setNumero($valor)
		{
			$this->txtNumero = $valor;
		}
		public function setComple($valor)
		{
			$this->txtComple=$valor;
		}
		 public	function setStatus($valor)
					 {
					   $this->txtStatus=$valor;

					 }
		public function getStatus()
					{
						return($this->txtStatus);
					}

		 public	function setTelefone($valor)
					 {
					   $this->txtTelefone=$valor;
					 }

		public function getTelefone()
					 {
						return($this->txtTelefone);
					 }

		 public	function setFax($valor)
					 {
					   $this->txtFax=$valor;

					 }
		public function getFax()
					{
						return($this->txtFax);
					}
		 public	function setCelular($valor)
					 {
					   $this->txtCelular=$valor;

					 }
		public	function getCelular()
					 {
					   return($this->txtCelular);

					 }
		 public	function setComercial($valor)
					 {
					   $this->txtComercial=$valor;

					 }
		public	function getComercial()
					 {
					   return($this->txtComercial);

					 }

		 public	function setEmail($valor)
					 {
					   $this->txtEmail=$valor;

					 }
		public	function getEmail()
					 {
					  return($this->txtEmail);

					 }
		public function setSexo($valor)
		{
			$this->txtSexo = $valor;
		}
		 public	function setSenha($valor)
		{
		 $this->txtSenha= $valor;

	     }
		public	function getSenha()
	   {
					  return($this->txtSenha);

	   }
		 public	function setWeb($valor)
					 {
					   $this->txtWeb=$valor;

					 }
		 public	function getWeb()
					 {
					   return($this->txtWeb);

					 }
		 public	function setAvatar($valor)
					 {
					   $this->txtAvatar=$valor;

					 }
		 public	function getAvatar()
					 {
					   return($this->txtAvatar);

					 }
		public function setComandoSQL($valor)
		{
			$this->comandoSQL = $valor;
		}
		public function getComandoSQL()
		{
			return($this->comandoSQL);
		}
		
		function __construct()
		{
			$this->bd = new PDO("mysql:host=localhost;dbname=aula", "root", "");
		}
		
		public function ExecutaSQL()
		{
			if ($this->comandoSQL != "")
				return($this->bd->exec($this->comandoSQL));
			else
				return(false);
		}
		
		public function ExecutaSelect()
		{
			if ($this->comandoSQL != "")
			{
				$dados = $this->bd->query($this->comandoSQL);
		
			   foreach($dados as $linhas)
				{ 
				echo("<table border=1>");
				echo(""."<tr>"."<td>"."Cod".$linhas["CID_COD"]."Nome: ".$linhas["CID_NOME"]."Stado".$linhas["CID_UF"]."</td>"."</tr>");
				echo("</table>");
			  
				
				}
			
				return($dados->fetchAll());
			}
			else
			{
			
				return(false);
			}
		}
		
		function __destruct()
		{
			$this->bd = null;
		}
			public function Inserir()
		{
			$b = new Banco();
			$b->setComandoSQL("insert into usuarios (usu_login, usu_nome, usu_email, usu_senha, usu_dtcriacao, usu_ativo) values
					('".$this->login."','".$this->nome."','".$this->email."','".$this->senha."','".$this->dtcriacao."','S')");
			if ($b->ExecutaSQL())
				return(true);
			else
				return(false);
		}
		
		public function Alterar()
		{
			$b = new Banco();
			$b->setComandoSQL("update usuarios set usu_nome='".$this->nome."', usu_email='".$this->email."',
					usu_senha='".$this->senha."', usu_dtcriacao='".$this->dtcriacao."', usu_ativo='".$this->ativo."' 
					where usu_login='".$this->login."'");
			if ($b->ExecutaSQL())
				return(true);
			else
				return(false);
		}

		public function Excluir()
		{
			$b = new Banco();
			$b->setComandoSQL("delete from usuarios 
					where usu_login='".$this->login."'");
			if ($b->ExecutaSQL())
				return(true);
			else
				return(false);
		}
		
		public function Seleciona()
		{
			$b = new Banco();
			$b->setComandoSQL("select * from usuarios where usu_login='".$this->login."'");
			return($b->ExecutaSelect());
		}



?>