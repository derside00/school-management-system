from flask import Flask, render_template, request, redirect, url_for

app = Flask(__name__)

# Example data for products
products = [
    {'id': 1, 'name': 'Apple', 'price': 0.5, 'quantity': 50},
    {'id': 2, 'name': 'Banana', 'price': 0.3, 'quantity': 100},
    {'id': 3, 'name': 'Orange', 'price': 0.7, 'quantity': 75},
]

@app.route('/')
def index():
    return render_template('index.html', products=products)

@app.route('/add_product', methods=['GET', 'POST'])
def add_product():
    if request.method == 'POST':
        new_product = {
            'id': len(products) + 1,
            'name': request.form['name'],
            'price': float(request.form['price']),
            'quantity': int(request.form['quantity']),
        }
        products.append(new_product)
        return redirect(url_for('index'))
    return render_template('add_product.html')

if __name__ == '__main__':
    app.run(debug=True)
