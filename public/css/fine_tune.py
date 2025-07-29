from datasets import load_dataset
from transformers import T5Tokenizer, T5ForConditionalGeneration, TrainingArguments, Trainer, DataCollatorForSeq2Seq

# Load dataset
dataset = load_dataset("json", data_files="astro_finetune_dataset.jsonl")

# Load model and tokenizer
model = T5ForConditionalGeneration.from_pretrained("google/flan-t5-small")
tokenizer = T5Tokenizer.from_pretrained("google/flan-t5-small")

# Tokenize
def preprocess(example):
    input_text = example["Input"]
    target_text = example["Output"]
    model_input = tokenizer(input_text, truncation=True, padding="max_length", max_length=128)
    with tokenizer.as_target_tokenizer():
        labels = tokenizer(target_text, truncation=True, padding="max_length", max_length=128)
    model_input["labels"] = labels["input_ids"]
    return model_input

tokenized_dataset = dataset["train"].map(preprocess)

# Training args
training_args = TrainingArguments(
    output_dir="./models/astro-flan-t5-small",
    per_device_train_batch_size=4,
    num_train_epochs=5,
    logging_dir="./logs",
    save_strategy="epoch",
    evaluation_strategy="no",
    fp16=True if torch.cuda.is_available() else False
)

# Data collator
data_collator = DataCollatorForSeq2Seq(tokenizer, model=model)

# Trainer
trainer = Trainer(
    model=model,
    args=training_args,
    train_dataset=tokenized_dataset,
    tokenizer=tokenizer,
    data_collator=data_collator,
)

# Train
trainer.train()

# Save model
trainer.save_model("./models/astro-flan-t5-small")
tokenizer.save_pretrained("./models/astro-flan-t5-small")
