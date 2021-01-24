CREATE TABLE "MenuItems" (
    "Id" INTEGER NOT NULL CONSTRAINT "PK_MenuItems" PRIMARY KEY AUTOINCREMENT,
    "Name" TEXT NULL,
    "Active" INTEGER NOT NULL,
    "BasePrice" TEXT NOT NULL,
    "DateAdded" TEXT NOT NULL,
    "ItemType" TEXT NOT NULL,
    "DateModified" TEXT NULL,
    "DateDeactivated" TEXT  NULL
, "CookTime" integer NOT NULL DEFAULT '0');

INSERT INTO MenuItems(Name,Active,BasePrice,DateAdded, ItemType, DateModified, DateDeactivated,CookTime)
VALUES('Pepperoni', 1,5.00,DateTime('now'),"Food",DateTime('now'),Null,3);

INSERT INTO MenuItems(Name,Active,BasePrice,DateAdded,ItemType,  DateModified, DateDeactivated, CookTime)
VALUES('Bread Sticks', 1,1.99,DateTime('now'),"Food",DateTime('now'),Null,0);

INSERT INTO MenuItems(Name,Active,BasePrice,DateAdded,ItemType,  DateModified, DateDeactivated,CookTime)
VALUES('Wings', 1,3.99,DateTime('now'),"Food",DateTime('now'),Null,4);

INSERT INTO MenuItems(Name,Active,BasePrice,DateAdded, ItemType, DateModified, DateDeactivated,CookTime)
VALUES('Vokda', 1,8.00,DateTime('now'),"Drinks",DateTime('now'),Null,3);

INSERT INTO MenuItems(Name,Active,BasePrice,DateAdded,ItemType,  DateModified, DateDeactivated, CookTime)
VALUES('FireBall', 1,5.99,DateTime('now'),"Drinks",DateTime('now'),Null,0);

INSERT INTO MenuItems(Name,Active,BasePrice,DateAdded,ItemType,  DateModified, DateDeactivated,CookTime)
VALUES('Rum', 1,8.99,DateTime('now'),"Drinks",DateTime('now'),Null,4);