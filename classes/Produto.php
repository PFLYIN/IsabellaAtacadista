<?php

class Produto {
    public ?int $id;
    public string $titulo;
    public ?string $descricao;
    public float $preco_varejo;
    public float $preco_atacado;
    public ?string $data_cadastro;
    
    // Nova propriedade para as imagens!
    public array $imagens = [];

    public function __construct(
        string $titulo,
        float $preco_varejo,
        float $preco_atacado,
        ?string $descricao = null
    ) {
        $this->titulo = $titulo;
        $this->preco_varejo = $preco_varejo;
        $this->preco_atacado = $preco_atacado;
        $this->descricao = $descricao;
    }
    
    // Podemos adicionar métodos para manipular as imagens
    public function adicionarImagem(string $caminhoImagem): void {
        $this->imagens[] = $caminhoImagem;
    }
    
    public function getImagens(): array {
        return $this->imagens;
    }
    
    public function limparImagens(): void {
        $this->imagens = [];
    }
}
