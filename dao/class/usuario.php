<?php
class Usuario {

	private $id;

	private $deslogin;

	private $dessenha;

	private $dtcadastro;

	public function getId() {
		return $this->id;
	}

	public function setId($id) {
		$this->id = $id;
	}

	public function getDeslogin() {
		return $this->deslogin;
	}

	public function setDeslogin($deslogin) {
		$this->deslogin = $deslogin;
	}

	public function getDessenha() {
		return $this->dessenha;
	}

	public function setDessenha($dessenha) {
		$this->dessenha = $dessenha;
	}

	public function getDtcadastro() {
		return $this->dtcadastro;
	}

	public function setDtcadastro($dtcadastro) {
		$this->dtcadastro = $dtcadastro;
	}

	public function loadById($id) {
		$sql = new Sql();
		$rawQuery = "SELECT * FROM tb_usuarios WHERE id = :ID";
		$param = [
			":ID" => $id
		];
		$statement = $sql->select($rawQuery, $param);
		if (isset($statement[0])) {
			$this->setData($statement[0]);
		}
	}

	public static function getList() {
		$sql = new Sql();
		$rawQuery = "SELECT * FROM tb_usuarios ORDER BY deslogin ASC";
		return $sql->select($rawQuery);
	}

	public static function search($login) {
		$sql = new Sql();
		$rawQuery = "SELECT * FROM tb_usuarios WHERE deslogin LIKE :LOGIN ORDER BY deslogin ASC";
		$param = [
			":LOGIN" => '%' . $login . '%'
		];
		return $sql->select($rawQuery, $param);
	}

	public function login($login, $senha) {
		$sql = new Sql();
		$rawQuery = "SELECT * FROM tb_usuarios WHERE deslogin = :LOGIN AND dessenha = :SENHA";
		$param = [
			":LOGIN" => $login,
			":SENHA" => $senha
		];
		$statement = $sql->select($rawQuery, $param);
		if (isset($statement[0])) {
			$this->setData($statement[0]);
		} else {
			throw new Exception("Login or password are invalid");
		}
	}

	public function insert() {
		$sql = new Sql();
		$rawQuery = "CALL sp_usuarios_insert(:LOGIN, :SENHA)";
		$param = array(
			":LOGIN" => $this->getDeslogin(),
			":SENHA" => $this->getDessenha()
		);
		$result = $sql->select($rawQuery, $param);
		if (isset($result[0])) {
			$this->setData($result[0]);
		}
	}

	public function update($login, $senha) {
		$this->setDeslogin($login);
		$this->setDessenha($senha);
		$sql = new Sql();
		$rawQuery = "UPDATE tb_usuarios SET deslogin = :LOGIN' dessenha = :SENHA WHERE id = :ID";
		$param = array(
				":ID" => $this->getId(),
				":LOGIN" => $this->getDeslogin(),
				":SENHA" => $this->getDessenha()
		);
		$sql->query($rawQuery, $param);
	}

	public function delete() {
		$sql = new Sql();
		$rawQuery = "DELETE FROM tb_usuarios WHERE id = :ID";
		$param = array(
			":ID" => $this->getId()
		);
		$sql->query($rawQuery, $param);
		$this->setId(0);
		$this->setDeslogin("");
		$this->setDessenha("");
		$this->setDtcadastro(new DateTime());
	}

	public function __construct($login = "", $senha = "") {
		$this->setDeslogin($login);
		$this->setDessenha($senha);
	}

	public function setData($data) {
		$this->setId($data['id']);
		$this->setDeslogin($data['deslogin']);
		$this->setDessenha($data['dessenha']);
		$this->setDtcadastro(new DateTime($data['dtcadastro']));
	}

	public function __toString() {
		return json_encode(array(
			"id" => $this->getId(),
			"deslogin" => $this->getDeslogin(),
			"dessenha" => $this->getDessenha(),
			"dtcadastro" => $this->getDtcadastro()->format('d/m/Y H:i:s')
		));
	}
}
?>
