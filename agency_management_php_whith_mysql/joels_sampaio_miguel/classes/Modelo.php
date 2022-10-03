<?php
    class Modelo implements Databaseable
    {
        use WithDatabaseable;

        protected $idmodelo;
        protected $nome;
        protected $nacionalidade;
        protected $genero;
        protected $idade;
        protected $morada;
        protected $quadril;
        protected $busto;
        protected $cintura;
        protected $altura;
        protected $nif;
        protected $codpais;
        protected $telefone;
        protected $datainicioagencia;
        protected $datafimagencia;


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
         * Get the value of nome
         */ 
        public function getNome()
        {
                return $this->nome;
        }

        /**
         * Set  the value of nome
         */ 
        public function setNome($nome)
        {
                $this->nome = $nome;
        }

        /**
         * Get the value of nacionalidade
         */ 
        public function getNacionalidade()
        {
                return $this->nacionalidade;
        }

        /**
         * Set the value of nacionalidade
         *
         * @return  self
         */ 
        public function setNacionalidade($nacionalidade)
        {
                $this->nacionalidade = $nacionalidade;

                return $this;
        }

        /**
         * Get the value of genero
         */ 
        public function getGenero()
        {
                return $this->genero;
        }

        /**
         * Set the value of genero
         *
         * @return  self
         */ 
        public function setGenero($genero)
        {
                $this->genero = $genero;

                return $this;
        }

        /**
         * Get the value of idade
         */ 
        public function getIdade()
        {
                return $this->idade;
        }

        /**
         * Set the value of idade
         *
         * @return  self
         */ 
        public function setIdade($idade)
        {
                $this->idade = $idade;

                return $this;
        }

        /**
         * Get the value of morada
         */ 
        public function getMorada()
        {
                return $this->morada;
        }

        /**
         * Set the value of morada
         *
         * @return  self
         */ 
        public function setMorada($morada)
        {
                $this->morada = $morada;

                return $this;
        }

        /**
         * Get the value of quadril
         */ 
        public function getQuadril()
        {
                return $this->quadril;
        }

        /**
         * Set the value of quadril
         *
         * @return  self
         */ 
        public function setQuadril($quadril)
        {
                $this->quadril = $quadril;

                return $this;
        }

        /**
         * Get the value of busto
         */ 
        public function getBusto()
        {
                return $this->busto;
        }

        /**
         * Set the value of busto
         *
         * @return  self
         */ 
        public function setBusto($busto)
        {
                $this->busto = $busto;

                return $this;
        }

        /**
         * Get the value of cintura
         */ 
        public function getCintura()
        {
                return $this->cintura;
        }

        /**
         * Set the value of cintura
         *
         * @return  self
         */ 
        public function setCintura($cintura)
        {
                $this->cintura = $cintura;

                return $this;
        }

        /**
         * Get the value of altura
         */ 
        public function getAltura()
        {
                return $this->altura;
        }

        /**
         * Set the value of altura
         *
         * @return  self
         */ 
        public function setAltura($altura)
        {
                $this->altura = $altura;

                return $this;
        }

        /**
         * Get the value of nif
         */ 
        public function getNif()
        {
                return $this->nif;
        }

        /**
         * Set the value of nif
         *
         * @return  self
         */ 
        public function setNif($nif)
        {
                $this->nif = $nif;

                return $this;
        }

        /**
         * Get the value of codpais
         */ 
        public function getCodpais()
        {
                return $this->codpais;
        }

        /**
         * Set the value of codpais
         *
         * @return  self
         */ 
        public function setCodpais($codpais)
        {
                $this->codpais = $codpais;

                return $this;
        }

        /**
         * Get the value of telefone
         */ 
        public function getTelefone()
        {
                return $this->telefone;
        }

        /**
         * Set the value of telefone
         *
         * @return  self
         */ 
        public function setTelefone($telefone)
        {
                $this->telefone = $telefone;

                return $this;
        }

        /**
         * Get the value of datainicioagencia
         */ 
        public function getDatainicioagencia()
        {
                return $this->datainicioagencia;
        }

        /**
         * Set the value of datainicioagencia
         *
         * @return  self
         */ 
        public function setDatainicioagencia($datainicioagencia)
        {
                $this->datainicioagencia = $datainicioagencia;

                return $this;
        }

        /**
         * Get the value of datafimagencia
         */ 
        public function getDatafimagencia()
        {
                return $this->datafimagencia;
        }

        /**
         * Set the value of datafimagencia
         *
         * @return  self
         */ 
        public function setDatafimagencia($datafimagencia)
        {
                $this->datafimagencia = $datafimagencia;

                return $this;
        }
        
    }



?>