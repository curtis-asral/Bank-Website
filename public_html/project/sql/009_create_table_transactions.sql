CREATE TABLE IF NOT EXISTS Transactions(
    id int AUTO_INCREMENT PRIMARY KEY ,
    src int,
    dest int,
    diff int,
    reason varchar(15) not null COMMENT 'The type of transaction that occurred',
    details varchar(240) default null COMMENT  'Any extra details to attach to the transaction',
    created TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    modified TIMESTAMP DEFAULT CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
    FOREIGN KEY (src) REFERENCES Accounts(id),
    FOREIGN KEY(dest) REFERENCES Accounts(id),
    constraint ZeroTransferNotAllowed CHECK(diff != 0)
)