import numpy as np

#Sigmoid activation function
def sigmoid(x):
    return 1 / (1 + np.exp(-x))

# Derivative of sigmoid
def sigmoid_derivative(x):
    return x * (1 - x)

# Sample input data (4 samples, 2 features)
X = np.array([[0, 0],
              [0, 1],
              [1, 0],
              [1, 1]])

#  Target output (XOR problem)
y = np.array([[0], [1], [1], [0]])

# Initialize weights randomly
np.random.seed(42)
weights = np.random.rand(2, 1)
bias = np.random.rand(1)

#  Training loop
learning_rate = 0.1
epochs = 10000

for epoch in range(epochs):
    # Forward pass
    z = np.dot(X, weights) + bias
    output = sigmoid(z)

    # Backpropagation
    error = y - output
    adjustments = error * sigmoid_derivative(output)

    # Update weights and bias
    weights += learning_rate * np.dot(X.T, adjustments)
    bias += learning_rate * np.sum(adjustments)

#  Final output
print("Trained output:")
print(output)

