<?php
    class Media implements Databaseable
    {
        use WithDatabaseable;
        protected $idmedia;
        protected $datamedia;
        protected $resolucao;
        protected $idtrabalho;
        protected $metadados;
        protected $idfotografo;

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
         * Get the value of idmedia
         */ 
        public function getIdmedia()
        {
                return $this->idmedia;
        }

        /**
         * Set the value of datamedia
         *
         * @return  self
         */ 
        public function setDatamedia($datamedia)
        {
                $this->datamedia = $datamedia;

                return $this;
        }

        /**
         * Set the value of resolucao
         *
         * @return  self
         */ 
        public function setResolucao($resolucao)
        {
                $this->resolucao = $resolucao;

                return $this;
        }
        public  function getResolucao()
        {
                return $this->resolucao;
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
         * Get the value of metadados
         */ 
        public function getMetadados()
        {
                return $this->metadados;
        }

        /**
         * Set the value of metadados
         *
         * @return  self
         */ 
        public function setMetadados($metadados)
        {
                $this->metadados = $metadados;

                return $this;
        }

        /**
         * Get the value of idfotografo
         */ 
        public function getIdfotografo()
        {
                return $this->idfotografo;
        }

        /**
         * Set the value of idfotografo
         *
         * @return  self
         */ 
        public function setIdfotografo($idfotografo)
        {
                $this->idfotografo = $idfotografo;

                return $this;
        }

        /**
         * Get the value of datamedia
         */ 
        public function getDatamedia()
        {
                return $this->datamedia;
        }
    }
?>