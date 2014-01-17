# Coding Dojo EMAp/FGV 2014-01-17

- Linguagem: [Python](http://www.python.org/)
- Problema: Números por extenso (inverso do problema
  [Lendo um cheque](http://dojopuzzles.com/problemas/exibe/lendo-um-cheque/))


## :-)

- Comida e bebida +++++++
- A dinâmica e interação entre os participantes foi legal ++++
- Ninguém se escondeu / todos foram voluntariamente programar ++++
- O "dojo master" foi bem didático, gostei das dicas ++++
- Problema interessante +++
- Não teve barulho de britadeira como semana passada ++
- A turma estava mais silenciosa que semana passada
- Pouquíssimos erros de sintaxe
- Gostei do [dojopuzzles.com](http://dojopuzzles.com/)


## :-(

- Teclado ruim (repetindo a tecla "6", Ctrl e Fn invertidos) ++++
- Demorou para começar ++
- Alguns pilotos/copilotos falaram baixo (ficava difícil acompanhar o
  raciocínio) +
- Muita gente usou seu próprio notebook durante o Dojo +
- Código dos testes ficou bem repetitivo (muita "digitação" e pouco código) +
- Não usamos muito o IPython +
- Acabou a bateria do notebook no meio do dojo
- Tinha muita gente para um Dojo só, o que dispersou um pouco
- Não terminamos o problema
- Só fizemos um problema
- Alguns alunos faltaram


## Participantes

- Adriano Duarte
- [Álvaro Justen](https://github.com/turicas)
- Cecília Lima
- Eliane
- Fernando Teixeira
- Gabriel Carneiro
- José Valentim
- Leon Diniz
- Leonardo Pinheiro
- Leonardo Rodrigues
- Luciene
- Luis Eduardo
- Renato Souza


## Rodando os testes

Vá até o diretório onde estão os arquivos e execute o comando:

    nosetests -dsv --with-yanc --with-coverage \
              --cover-package numeros_por_extenso test_numeros_por_extenso.py

> Nota: você precisará dos pacotes `nose`, `yanc` e `coverage` instalados;
> caso você possua o `pip`, basta executar: `pip install nose yanc coverage`.
