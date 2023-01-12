<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('content')->insert([
            [
                'title' => 'Heading',
                'materi' => 'Code :
                <h1>Heading 1<h1>
                <h2>Heading 2<h2>
                <h3>Heading 3<h3>
                <h4>Heading 4<h4>
                <h5>Heading 5<h5>
                <h6>Heading 6<h6>

                Each HTML headingg has a standard size. However, using the CSS font-size property, you may determine the size for any heading using the style attribute :
                <h1 style="font-size:60px;>Heading 1</h1>'
            ],
            [
                'title' => 'Paragraph',
                'materi' => 'A paragraph is defined by the HTML <p> element.

                A paragraph always begins on a new line, and browsers add some white space (a margin) before and after it.

                Example :
                <p>This is a paragraph.</p>
                <p>This is another paragraph.</p>

                LINE BREAKS
                If you want a line break (a new line) without opening a new paragraph, user <br>.

                TAGS
                <p> = Defines a paragraph
                <hr> = Defines a thematic change in the content
                <br> = Inserts a single line break
                <pre> = Defines pre-formatted text'
            ],
            [
                'title' => 'Styles',
                'materi' => 'Color, font, size, and other styles can be added to an element using the HTML style property

                BACKGROUND COLOR
                The CSS background-color property specifies the color of an HTML elements background.
                <body stle="background-color:powderblue;">

                TEXT COLOR
                The CSS color property specifies the color of an HTML elements text.
                <h1 style="color:blue;">This is a heading</h1>

                FONT
                The CSS font-family property specifies the color of an HTML elements font.
                <h1 style="font-family:verdana;">

                TEXT SIZE
                The CSS font-size property specifies the color of an HTML elements text size..
                <h1 style="font-size:300%;">This is a heading</h1>

                TEXT ALLIGNMENT
                The CSS text-allign property specifies the color of an HTML elements text allignment.
                <h1 style="text-align:center;">Centered Heading</h1>'
            ],
            [
                'title' => 'List',
                'materi' => 'UNORDERED LIST
                The <ul> tag denotes an unordered list. Each list item is preceded by the <li> tag.
                <ul>
                    <li>Coffee</li>
                    <li>Tea</li>
                    <li>Milk</li>
                </ul>

                ORDERED LIST
                The <ol> tag denotes an ordered list. Each list item is precededd by the <li> tag.
                <ol>
                    <li>Coffee</li>
                    <li>Tea</li>
                    <li>Milk</li>
                </ol>

                TAGS
                <ul> = Defines an unordered list
                <ol> = Defines an ordered list
                <li> = Defines a list item
                <dl> = Defines a description list
                <dt> = Defines a term in a description list
                <dd> = Describes the term in a description list'
            ],
            [
                'title' => 'Background',
                'materi' => 'BACKGROUND COLOR
                The background-color attribute determines the color of an elements background.

                body {
                    background-color: light blue;
                }

                BACKGROUND IMAGE
                The background-image  attribute determies the image of an elements background,

                body {
                    background-image: url("paper.gif");
                }

                BACKGROUND REPEAT
                The background-image property, by default, repeats an image both horizontally and vertically.

                body {
                    background-image: url("gradient_bg.png");
                    background-repeat: repeat-x;
                }

                BACKGROUND ATTACHMENT
                The background-attachment attribute indicates whether or not the background picture should scroll with the rest of the page:

                body {
                    background-image url("img_tree.png");
                    background-repeat: no-repeat;
                    background-position: right top;
                    background-attachment: fixed;
                }'
            ],
            [
                'title' => 'Create Table',
                'materi' => 'To create a new table in SQL, we can use the CREATE TABLE statement.
                CREATE TABLE table_name (
                    column1 datatype,
                    columnt2 datatype,
                    columnt3 datatype,
                    ....
                );
                - The column parameter specify the names of the columns of the table.
                - The datatype parameter specifies the type of data the column can hold (e.g. varchar, integer, date, etc.).

                Example
                CREATE TABLE Persons (
                    PersonID int,
                    LastName varchar(255),
                    FirstName varchar(255),
                    Address varchar(255),
                    City varchar(255)
                );

                The statement above will create a table named "Persons" that contains 5 columns, which are PersonID, LastName, FirstName, Address, and City.'
            ],
            [
                'title' => 'Drop Table',
                'materi' => "To drop (remove) a table, we can use the DROP TABLE statement.

                Syntax
                INSER INTO Persons
                VALUES('1', 'Maria', 'Angela', '305 - 14th Ave. S. Suite 3B', 'London');

                Once we drop a table, all the datas stored in that table will be removed as well.

                Example
                DROP TABLE Persons;

                The statement above will drop (remove) a table named Persons and all of the datas stored in the table."
            ],
            [
                'title' => 'Insert Data',
                'materi' => 'We can insert datas into an existing table by using the syntax INSERT INTO

                Syntax
                We can use the syntax below when we want to fill all the column values when adding a new record.

                INSERT INTO table_name
                VALUES (value1, value2, value3, ...);

                We can use the syntax below when we want to add values to specific columns when adding a new record.

                INSERT INTO table_name (column1, column2, column3)
                VALUES (value1, value2, value3, ...);

                The statement above will fill all the column values when adding a new record.'
            ],
            [
                'title' => 'Update Data',
                'materi' => "To update existing rows in a table, we can use the UPDATE statement.

                Syntax
                DELETE FROM table_name WHERE condition;

                The statement above will delete records that satisfies the condition.

                [!] Be careful when deleting records in a table! Notice the WHERE clause in the DELETE statement. The WHERE clause specifies which record(s) should be deleted. If you omit the WHERE clause, all records in the table will be deleted. If you omit the WHERE clause, all records in the table will be deleted!

                Example
                DELETE FROM Persons WHERE FirstName = 'Maria'

                The statement above will delete all datas that has 'Maria' filled in the FirstName column."
            ],
            [
                'title' => 'Delete Data',
                'materi' => "To delete existing records in a table, we can use the DELETE statement.

                Example
                UPDATE Persons
                SET City = 'London'
                WHERE Address = '305 - 14th Ave. S. Suite 3B';

                The statement above will set the City column value to 'London' to all datas that has '305 - 14th Ave. S. Suite 3B' filled in the Address column."
            ]
        ]);
    }
}
