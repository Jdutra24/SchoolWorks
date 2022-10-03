<?php
    class Fotografo_trabalho implements Databaseable
    {
        use WithDatabaseable;
        protected $idfotografo;
        protected $idtrabalho;
        protected $datainicio;
        protected $datafim;
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
         * Get the value of idfotografo
         */ 
        public function getIdfotografo()
        {
                return $this->idfotografo;
        }

        /**
         * Get the value of idtrabalho
         */ 
        public function getIdtrabalho()
        {
                return $this->idtrabalho;
        }

        /**
         * Get the value of datainicio
         */ 
        public function getDatainicio()
        {
                return $this->datainicio;
        }

        /**
         * Set the value of datainicio
         *
         * @return  self
         */ 
        public function setDatainicio($datainicio)
        {
                $this->datainicio = $datainicio;

                return $this;
        }

        /**
         * Get the value of datafim
         */ 
        public function getDatafim()
        {
                return $this->datafim;
        }

        /**
         * Set the value of datafim
         *
         * @return  self
         */ 
        public function setDatafim($datafim)
        {
                $this->datafim = $datafim;

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