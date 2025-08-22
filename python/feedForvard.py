import numpy as np

def sigmoid(x):
    return 1 / (1 + np.exp(-x))


def sigmoid_derivative(x):
    return x * (1 - x)


X = np.array([[0, 0],
              [0, 1],
              [1, 0],
              [1, 1]])

y = np.array([[0], [1], [1], [0]])

np.random.seed(42)
weights = np.random.rand(2, 1)
bias = np.random.rand(1)

learning_rate = 0.1
epochs = 10000

for epoch in range(epochs):
   
    z = np.dot(X, weights) + bias
    output = sigmoid(z)

   
    error = y - output
    adjustments = error * sigmoid_derivative(output)

   
    weights += learning_rate * np.dot(X.T, adjustments)
    bias += learning_rate * np.sum(adjustments)


print("Trained output:")
print(output)

