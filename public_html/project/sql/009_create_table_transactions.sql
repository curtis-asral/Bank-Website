CREATE TABLE IF NOT EXISTS Transactions(
    id int AUTO_INCREMENT PRIMARY KEY,
    account_src int NOT NULL,
    account_dest int NOT NULL,
    balance_change int DEFAULT 0,
    transaction_type varchar(100),
    memo varchar(100),
    expected_total int NOT NULL,
    modified TIMESTAMP DEFAULT CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP
)