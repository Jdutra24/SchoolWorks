<?php
    class Trabalho implements Databaseable
    {
        use WithDatabaseable;

        protected $idtrabalho;
        protected $tipo;
        protected $datainiciotrabalho;
        protected $datafimtrabalho;
        protected $localizacao;

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
         * Get the value of idtrabalho
         */ 
        public function getIdtrabalho()
        {
                return $this->idtrabalho;
        }

        /**
         * Set the value of idtrabalho
         *
         * @return  self
         */ 
        public function setIdtrabalho($idtrabalho)
        {
                $this->idtrabalho = $idtrabalho;

                return $this;
        }

        /**
         * Get the value of tipo
         */ 
        public function getTipo()
        {
                return $this->tipo;
        }

        /**
         * Set the value of tipo
         *
         * @return  self
         */ 
        public function setTipo($tipo)
        {
                $this->tipo = $tipo;

                return $this;
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
         * Get the value of localizacao
         */ 
        public function getLocalizacao()
        {
                return $this->localizacao;
        }

        /**
         * Set the value of localizacao
         *
         * @return  self
         */ 
        public function setLocalizacao($localizacao)
        {
                $this->localizacao = $localizacao;

                return $this;
        }
    }

?>