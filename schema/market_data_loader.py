import csv
import mysql.connector

# Connect to the MySQL database
cnx = mysql.connector.connect(user='root', password='localhost',
                              host='localhost',
                              database='greenagro')
cursor = cnx.cursor()

# Open the CSV file and read its contents
with open('data.csv', 'r') as file:
    reader = csv.reader(file)
    next(reader)  # skip the header row

    # Create an empty list to store the queries
    queries = []

    # Iterate over each row and build the query string
    for row in reader:
        # Extract the values from the row
        date, admin1, admin2, market, latitude, longitude, category, commodity, unit, priceflag, pricetype, currency, price, usdprice = row

        # Build the SQL query
        query = "INSERT INTO market_data (date, admin1, admin2, market, latitude, longitude, category, commodity, unit, priceflag, pricetype, currency, price, usdprice) VALUES ('{}', '{}', '{}', '{}', {}, {}, '{}', '{}', '{}', '{}', '{}', '{}', {}, {})".format(date, admin1, admin2, market, latitude, longitude, category, commodity, unit, priceflag, pricetype, currency, price, usdprice)

        # Add the query to the list
        queries.append(query)

# Execute the queries in a single transaction
try:
    cursor.execute("START TRANSACTION")
    for query in queries:
        cursor.execute(query)
    cursor.execute("COMMIT")
except:
    cursor.execute("ROLLBACK")

# Write the queries to a text file
with open('queries.txt', 'w') as file:
    for query in queries:
        file.write(query + ";\n")

# Close the database connection
cursor.close()
cnx.close()
