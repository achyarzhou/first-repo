from rich.console import Console
from rich.table import Table

# Create a Rich Table
table = Table(title="rootx@info", show_lines=True)
table.add_column("Name", justify="center")
table.add_column("Age", justify="center")
table.add_column("City", justify="center")
table.add_column("Website", justify="center")
table.add_column("info", justify="center")


# Add data to the table
table.add_row("John Doe", "25", "New York", "[link=https://example.com/johndoe]Visit Website[/link]","")
table.add_row("Jane Smith", "30", "San Francisco", "[link=https://example.com/janesmith]Visit Website[/link]","")
table.add_row("Bob Johnson", "22", "Chicago", "[link=https://example.com/bobjohnson]Visit Website[/link]","")

# Print the table using Rich
console = Console()
console.print(table)

