## Pwitter - CodeIgniter

Projeto do módulo de PHP da Pós Graduação UNISAL

## Instalação

1. Clonar repositório

`git clone https://github.com/deoliveiralucas/pwitter-code-igniter.git`

2. Criar banco de dados

```sql
CREATE DATABASE pwitter;

USE pwitter;

CREATE TABLE user (
    id          INT PRIMARY KEY AUTO_INCREMENT,
    username    VARCHAR(15) UNIQUE,
    password    VARCHAR(255),
    email       VARCHAR(25),
    about       VARCHAR(255)
) ENGINE=InnoDB
  CHARACTER SET=utf8;

CREATE TABLE pweet (
    id           INT PRIMARY KEY AUTO_INCREMENT,
    user_id      INT,
    content      VARCHAR(140),
    insert_date  TIMESTAMP
) ENGINE=InnoDB
  CHARACTER SET=utf8;

CREATE TABLE follows (
    id              INT PRIMARY KEY AUTO_INCREMENT,
    source_user     INT,
    target_user     INT
) ENGINE=InnoDB
  CHARACTER SET=utf8;

INSERT INTO user VALUES
    (1, 'lucas',    '123', 'lucas@email.com',    'Description about lucas'),
    (2, 'victor',   '123', 'victor@email.com',   'Description about victor'),
    (3, 'denilson', '123', 'denilson@email.com', 'Description about denilson'),
    (4, 'fernando', '123', 'fernando@email.com', 'Description about fernando');

INSERT INTO pweet VALUES
    (NULL, 1, 'Primeiro pweet do usuário lucas',    NOW()),
    (NULL, 2, 'Primeiro pweet do usuário victor',   NOW()),
    (NULL, 3, 'Primeiro pweet do usuário denilson', NOW()),
    (NULL, 4, 'Primeiro pweet do usuário fernando', NOW());

INSERT INTO follows VALUES
    (NULL, 1,2),
    (NULL, 1,3),
    (NULL, 2,1),
    (NULL, 2,4),
    (NULL, 2,3),
    (NULL, 3,4),
    (NULL, 4,1),
    (NULL, 4,2);
```

## Grupo

- [Denilson](https://github.com/Deniilson)
- [Fernando](https://github.com/fernandomaximo)
- [Lucas](https://github.com/deoliveiralucas)
- [Victor](https://github.com/victorrennan)
