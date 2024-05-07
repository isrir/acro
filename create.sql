CREATE DATABASE acronym_db;

USE acronym_db;

CREATE TABLE acronyms (
    acronym VARCHAR(50) NOT NULL,
    abbreviation VARCHAR(200) NOT NULL
);

-- Insert some sample data
INSERT INTO acronyms (acronym, abbreviation)
VALUES
    ('HTML', 'Hypertext Markup Language'),
    ('CSS', 'Cascading Style Sheets'),
    ('JS', 'JavaScript'),
    ('SQL', 'Structured Query Language'),
    ('AJAX', 'Asynchronous JavaScript and XML');