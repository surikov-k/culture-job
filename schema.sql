CREATE DATABASE IF NOT EXISTS culture_job_orders;

USE culture_job_orders;

CREATE TABLE users
(
  id         INT AUTO_INCREMENT PRIMARY KEY,
  name       VARCHAR(255)       NOT NULL,
  phone      VARCHAR(20) UNIQUE NOT NULL,
  uuid       VARCHAR(36) UNIQUE,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
