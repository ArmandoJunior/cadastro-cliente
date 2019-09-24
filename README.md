# cadastro-cliente
crud com upload de imagem

<h4>Cadastro de Clientes - teste para Desenvolvedor Fullstack (Essentia)</h4> 

  

<p align="left"> 

    O sistema foi desenvolvido em Laravel 5.8 e Bootstrap 4 

     

    O mesmo foi construído com conceitos comumente utilizado no framework como: 

    Migration 

    Seeds 

    Faker 

    Programação Orientada a Objeto 

    e demais Patters do framework     

    

</p> 

  

<p align="left"> 

    Para levantar o sistema de forma mais fácil, pode ser utilizado o Docker bastando executar o seguinte comando para que o todo o ambiente de desenvolvimento seja construído:  

    docker-compose up -d (é preciso ter instalado o Docker no PC, estar dentro da pasta raiz do sistema e verificar se as portas do arquivo de configuração estão livres, caso contrário será necessário altera-las) 

    docker-compose down (destrói o sistema) 

</p> 

  

<p align="left"> 

    Como o sistema utiliza migrations e dados falsos criados automaticamente, na primeira vez que o docker-compose for executado, poderá ser necessário esperar um pouco para que o composer instale todas as dependências do Laravel e rode as migrations e o seed (com a lista de clientes geradas de forma dinâmica) 

</p> 

  

<p align="left"> 

    Caso o Docker não seja utilizado, é necessário criar um database com nome: laravel e username e password ambos: 'root' 

</p> 

  

<p align="center">https://cloud.docker.com/repository/docker/armandojrn/laravel-optmized </br> 

docker push armandojrn/laravel-optmized:tagname 

</p> 

 
