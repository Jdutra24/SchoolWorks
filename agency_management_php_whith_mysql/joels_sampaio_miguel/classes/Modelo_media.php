<?php
    class Modelo_media implements Databaseable
    {
        use WithDatabaseable;

        protected $idmodelo;
        protected $comentario;
        protected $idmedia;

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

        /**
         * Get the value of idmedia
         */ 
        public function getIdmedia()
        {
                return $this->idmedia;
        }
    }
?>