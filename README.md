# Obtendo dados de serviços na AWS com Php.

Com o objetivo de agilizar a coleta de informações sobre serviços usados pelos 
clientes na AWS. Com a ferramenta é possivel realizar dentre outras coisas, inventarios solicitados pelo cliente, o que poder ajudar na tomada de decisão com relação a produtos e serviços atualização etc...

>Este trabalho foi realizado por **Jaelcio de Araujo**

## O SDK
Estamos usando o SDK da AWS para conseguirmos realizar este processo.
Toda a documentação pode ser observada neste [LINK](https://docs.aws.amazon.com/sdk-for-php/v3/developer-guide/getting-started_basic-usage.html).
Abaixo segue o exemplo do uso da biblioteca para obter dados do S3:



```php
require 'vendor/autoload.php';

use Aws\S3\S3Client;
use Aws\Exception\AwsException;
```

## Onde executar o código
Todo o código pode ser executado dentro do cloudshell da AWS tendo o cuidado de instalar o php composer antes de começar o processo.
Na sequencia desse artigo pode ser visto todos os passos que voce precisa para executar o programa de forma simples e sem complicação.
Todo o processo será descrito em passos numerados.

### Instalação do composer

1. Cole o código a seguir no terminal e aperte **ENTER**:

```bash
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === '55ce33d7678c5a611085589f1f3ddf8b3c52d662cd01d4ba75c0ee0459970c2200a51f492d557530c71c15d8dba01eae') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"
```

2. Depois disseo execute o seguinte comando:
```bash
sudo mv composer.phar /usr/local/bin/composer
```




