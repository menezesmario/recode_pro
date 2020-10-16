alter table disciplina
modify nome VARCHAR(50);

ALTER TABLE disciplina 
CHANGE COLUMN nome nome_dis VARCHAR(70) NULL DEFAULT NULL;

ALTER TABLE disciplina 
ADD INDEX ind_carga_horaria (carga_horaria ASC) VISIBLE;

ALTER TABLE professor 
CHANGE COLUMN nome nome CHAR(70) NULL DEFAULT NULL ;

ALTER TABLE professor 
CHANGE COLUMN nome nome VARCHAR(70) NULL DEFAULT NULL ;

ALTER TABLE professor 
ADD COLUMN cidade VARCHAR(80) NULL;

ALTER TABLE professor
ADD COLUMN titulo VARCHAR(10) NULL AFTER cidade;