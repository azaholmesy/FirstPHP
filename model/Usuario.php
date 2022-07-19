<?php 
    class Usuario {
        private $idUsuario;
        private $nomeUsuario;
        private $usuario;
        private $senha;

        public function Usuario() {

        }
        
        public function getIdUsuario()
        {
                return $this->idUsuario;
        }

   
        public function setIdUsuario($idUsuario)
        {
                $this->idUsuario = $idUsuario;

                return $this;
        }

        /**
         * Get the value of nomeUsuario
         */ 
        public function getNomeUsuario()
        {
                return $this->nomeUsuario;
        }

        /**
         * Set the value of nomeUsuario
         *
         * @return  self
         */ 
        public function setNomeUsuario($nomeUsuario)
        {
                $this->nomeUsuario = $nomeUsuario;

                return $this;
        }

        /**
         * Get the value of usuario
         */ 
        public function getUsuario()
        {
                return $this->usuario;
        }

        /**
         * Set the value of usuario
         *
         * @return  self
         */ 
        public function setUsuario($usuario)
        {
                $this->usuario = $usuario;

                return $this;
        }

        /**
         * Get the value of senha
         */ 
        public function getSenha()
        {
                return $this->senha;
        }

        /**
         * Set the value of senha
         *
         * @return  self
         */ 
        public function setSenha($senha)
        {
                $this->senha = $senha;

                return $this;
        }

        public function __toString() {
            $user = "Usuário: <br/>"
                . " - Nome Usuário: " . $this->getNomeUsuario() . "<br/>"
                . " - Usuário: " . $this->getUsuario() . "<br/>";
            return $user;
        }
    }
?>