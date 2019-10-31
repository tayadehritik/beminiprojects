CREATE DATABASE ygarudkar;
 
CREATE TABLE jobs (id SERIAL NOT NULL PRIMARY KEY, salary varchar (20) NOT NULL, job_title varchar (30) NOT NULL,	company varchar (30) NOT NULL, job_type varchar (20) NOT NULL, location varchar (20) NOT NULL, job_description TEXT NOT NULL, company_profile TEXT);