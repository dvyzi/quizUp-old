/*==============================================================*/
/* Nom de SGBD :  MySQL 5.0                                     */
/* Date de création :  03/06/2024 09:50:05                      */
/*==============================================================*/

DROP TABLE IF EXISTS HISTORY;
DROP TABLE IF EXISTS QUESTION;
DROP TABLE IF EXISTS QUIZZ;
DROP TABLE IF EXISTS RESPONSE;
DROP TABLE IF EXISTS `USER`;

/*==============================================================*/
/* Table : HISTORY                                              */
/*==============================================================*/
CREATE TABLE HISTORY
(
   HISTORYID            INT NOT NULL AUTO_INCREMENT,
   USERID               INT,
   SUCCESSRATE          INT,
   PRIMARY KEY (HISTORYID)
);

/*==============================================================*/
/* Table : QUESTION                                             */
/*==============================================================*/
CREATE TABLE QUESTION
(
   QUESTIONID           INT NOT NULL AUTO_INCREMENT,
   QUIZID               CHAR(10),
   LABEL                TEXT NOT NULL,
   IMAGE                LONGBLOB NOT NULL,
   PRIMARY KEY (QUESTIONID)
);

/*==============================================================*/
/* Table : QUIZZ                                                */
/*==============================================================*/
CREATE TABLE QUIZZ
(
   QUIZID               CHAR(10) NOT NULL,
   HISTORYID            INT,
   `USE`                INT,
   PRIMARY KEY (QUIZID)
);

/*==============================================================*/
/* Table : RESPONSE                                             */
/*==============================================================*/
CREATE TABLE RESPONSE
(
   RESPONSEID           INT NOT NULL AUTO_INCREMENT,
   QUESTIONID           INT,
   VALUE                TEXT,
   PRIMARY KEY (RESPONSEID)
);

/*==============================================================*/
/* Table : USER                                                 */
/*==============================================================*/
CREATE TABLE `USER`
(
   USERID               INT NOT NULL AUTO_INCREMENT,
   HISTORYID            INT,
   NAME                 TEXT NOT NULL,
   SURNAME              TEXT NOT NULL,
   NICKNAME             TEXT NOT NULL,
   PASSWORD             TEXT NOT NULL,
   EMAIL                TEXT NOT NULL,
   PRIMARY KEY (USERID)
);

ALTER TABLE HISTORY ADD CONSTRAINT FK_USER_HISTORY FOREIGN KEY (USERID)
      REFERENCES `USER` (USERID) ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE QUESTION ADD CONSTRAINT FK_QUIZZ_QUESTION FOREIGN KEY (QUIZID)
      REFERENCES QUIZZ (QUIZID) ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE QUIZZ ADD CONSTRAINT FK_HISTORY_QUIZZ FOREIGN KEY (HISTORYID)
      REFERENCES HISTORY (HISTORYID) ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE RESPONSE ADD CONSTRAINT FK_QUESTION_RESPONSE FOREIGN KEY (QUESTIONID)
      REFERENCES QUESTION (QUESTIONID) ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE `USER` ADD CONSTRAINT FK_USER_HISTORY2 FOREIGN KEY (HISTORYID)
      REFERENCES HISTORY (HISTORYID) ON DELETE RESTRICT ON UPDATE RESTRICT;
