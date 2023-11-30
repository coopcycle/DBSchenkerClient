<?php

namespace DBShenker\Enum;

enum ReportReason: string {
    case AVA = 'Damage';
    case CEX = 'Excess parcel';
    case CFM = 'Conform';
    case DDT = 'Customs cleared';
    case DOC = 'Document missing';
    case DVY = 'Deviation';
    case MQP = 'Reserves for missing parcel(s)';
    case MQT = 'Total missing parcel';
    case NCF = 'Non-compliant';
    case OUV = 'Open parcel';
    case PVE = 'Visibly incorrect weight';
    case RCA = 'Reserves for identified damages';
    case RGT = 'Regularization of missing';
    case RMA = 'Reserves for missing and damage';
    case TAR = 'Late';
    case VVE = 'Visibly incorrect volume';
    case BRT = 'Remaining office';
    case CAD = 'Address complement';
    case DAF = 'Recipient absent or closed';
    case DDC = 'Customs in progress';
    case DDR = 'Customs refused';
    case DIL = 'Imperative delivery date';
    case DEM = 'Sender moved';
    case DIA = 'Unknown sender at address';
    case DIV = 'Refused diverse or without reason';
    case FCO = 'Closed for holidays or inventory';
    case FHB = 'Weekly closure';
    case FMA = 'Force majeure';
    case LNA = 'Delivery to a new address';
    case NJU = 'Not justified';
    case NRV = 'New appointment';
    case PAM = 'Mechanical breakdown';
    case PCO = 'Coded door';
    case PRE = 'Pre-advised';
    case ARS = 'Arrival of the means of transport on site (pickup location)';
    case DSP = 'Image available';
    case NEM = 'Receipt not endorsed';
    case RSY = 'Systematic reserves';
    case POS = 'Position';
    case SPD = 'Refuse port due';
    case SPL = 'Partial suffering';
    case SPO = 'Reserves/Refused spoliation';
    case SRB = 'Refuse against reimbursement';
    case PVI = 'Make an appointment';
    case SOU = 'Transmission suffering';
    case NRD = 'Not returned';
    case ANN = 'Cancellation';
    case DOS = 'Opening of dispute file';
    case MAR = 'Discarded';
    case MQD = 'Definitive missing';
    case REI = 'Return or re-expedition on instruction';
    case REO = 'Office return';
    case RXD = 'Re-routing of deviation or other';
}
