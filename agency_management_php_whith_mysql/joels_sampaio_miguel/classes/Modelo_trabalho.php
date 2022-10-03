<?php
    class Modelo_trabalho implements Databaseable
    {
        use WithDatabaseable;

        protected $idmodelo;
        protected $idtrabalho;
        protected $datainiciotrabalho;
        protected $datafimtrabalho;
        protected $comentario;

        public function __construct(array $parameters)
    {
        $properties = array_keys(get_class_vars(get_class()));
        foreach ($parameters as $key => $parameter) {
            if (in_array($key, $properties)) {
                $this->{$key} = $parameter;
            }
        }
    }

    

        /**
         * Get the value of idmodelo
         */ 
        public function getIdmodelo()
        {
                return $this->idmodelo;
        }

        /**
         * Get the value of idtrabalho
         */ 
        public function getIdtrabalho()
        {
                return $this->idtrabalho;
        }

        /**
         * Get the value of datainiciotrabalho
         */ 
        public function getDatainiciotrabalho()
        {
                return $this->datainiciotrabalho;
        }

        /**
         * Set the value of datainiciotrabalho
         *
         * @return  self
         */ 
        public function setDatainiciotrabalho($datainiciotrabalho)
        {
                $this->datainiciotrabalho = $datainiciotrabalho;

                return $this;
        }

        /**
         * Get the value of datafimtrabalho
         */ 
        public function getDatafimtrabalho()
        {
                return $this->datafimtrabalho;
        }

        /**
         * Set the value of datafimtrabalho
         *
         * @return  self
         */ 
        public function setDatafimtrabalho($datafimtrabalho)
        {
                $this->datafimtrabalho = $datafimtrabalho;

                return $this;
        }

        /**
         * Get the value of comentario
         */ 
        public function getComentario()
        {
                return $this->comentario;
        }

        /**
         * Set the value of comentario
         *
         * @return  self
         */ 
        public function setComentario($comentario)
        {
                $this->comentario = $comentario;

                return $this;
        }
    }
?>