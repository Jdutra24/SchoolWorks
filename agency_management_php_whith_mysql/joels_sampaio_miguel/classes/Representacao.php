<?php
        class Representacao implements Databaseable
{
        use WithDatabaseable;
        protected $idrepresentacao;
        protected $datainiciorepresentacao;
        protected $datafimrepresentacao;
        protected $motivofimrepresentacao;
        protected $idmodelo;
        protected $idagente;

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
         * Get the value of idrepresentacao
         */ 
        public function getIdrepresentacao()
        {
                return $this->idrepresentacao;
        }

        /**
         * Get the value of datainiciorepresentacao
         */ 
        public function getDatainiciorepresentacao()
        {
                return $this->datainiciorepresentacao;
        }

        /**
         * Set the value of datainiciorepresentacao
         *
         * @return  self
         */ 
        public function setDatainiciorepresentacao($datainiciorepresentacao)
        {
                $this->datainiciorepresentacao = $datainiciorepresentacao;

                return $this;
        }

        /**
         * Get the value of datafimrepresentacao
         */ 
        public function getDatafimrepresentacao()
        {
                return $this->datafimrepresentacao;
        }

        /**
         * Set the value of datafimrepresentacao
         *
         * @return  self
         */ 
        public function setDatafimrepresentacao($datafimrepresentacao)
        {
                $this->datafimrepresentacao = $datafimrepresentacao;

                return $this;
        }

        /**
         * Get the value of motivofimrepresentacao
         */ 
        public function getMotivofimrepresentacao()
        {
                return $this->motivofimrepresentacao;
        }

        /**
         * Set the value of motivofimrepresentacao
         *
         * @return  self
         */ 
        public function setMotivofimrepresentacao($motivofimrepresentacao)
        {
                $this->motivofimrepresentacao = $motivofimrepresentacao;

                return $this;
        }

        /**
         * Get the value of idmodelo
         */ 
        public function getIdmodelo()
        {
                return $this->idmodelo;
        }

        /**
         * Get the value of idagente
         */ 
        public function getIdagente()
        {
                return $this->idagente;
        }
}
?>