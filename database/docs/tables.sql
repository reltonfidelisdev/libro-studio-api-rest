-- Cria a tabela alunos
CREATE TABLE ` alunos ` (
  ` id ` bigint unsigned NOT NULL AUTO_INCREMENT,
  ` nome ` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  ` email ` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  ` sexo ` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  ` data_nascimento ` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  ` created_at ` timestamp NULL DEFAULT NULL,
  ` updated_at ` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (` id `)
) ENGINE = InnoDB AUTO_INCREMENT = 106 DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci

-- Cria a tabela cursos
CREATE TABLE ` cursos ` (
  ` id ` bigint unsigned NOT NULL AUTO_INCREMENT,
  ` titulo ` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  ` descricao ` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  ` created_at ` timestamp NULL DEFAULT NULL,
  ` updated_at ` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (` id `)
) ENGINE = InnoDB AUTO_INCREMENT = 13 DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci


-- Cria a tabela matriculas
CREATE TABLE ` matriculas ` (
  ` id ` bigint unsigned NOT NULL AUTO_INCREMENT,
  ` curso_id ` bigint unsigned NOT NULL,
  ` aluno_id ` bigint unsigned NOT NULL,
  ` created_at ` timestamp NULL DEFAULT NULL,
  ` updated_at ` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (` id `),
  KEY ` matriculas_curso_id_foreign ` (` curso_id `),
  KEY ` matriculas_aluno_id_foreign ` (` aluno_id `),
  CONSTRAINT ` matriculas_aluno_id_foreign ` FOREIGN KEY (` aluno_id `) REFERENCES ` alunos ` (` id `) ON DELETE CASCADE,
  CONSTRAINT ` matriculas_curso_id_foreign ` FOREIGN KEY (` curso_id `) REFERENCES ` cursos ` (` id `) ON DELETE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 27 DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci



